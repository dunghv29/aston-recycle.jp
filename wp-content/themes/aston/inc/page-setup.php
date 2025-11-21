<?php
/**
 * Auto Setup Pages - Tự động tạo các page cần thiết
 * 
 * @package aston
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * Danh sách các page cần thiết cho theme
 */
function aston_get_required_pages()
{
    return array(
        'company' => array(
            'title' => '会社情報',
            'slug' => 'company',
            'template' => 'page-company.php',
            'content' => '会社概要、代表挨拶、店舗情報を掲載しています。',
            'menu_order' => 10,
        ),
        'antiques' => array(
            'title' => 'アンティーク',
            'slug' => 'antiques',
            'template' => 'page-antiques.php',
            'content' => 'アンティーク家具・輸入家具専門店の情報です。',
            'menu_order' => 20,
        ),
        'contact' => array(
            'title' => 'お問い合わせ',
            'slug' => 'contact',
            'template' => 'page.php', // Default template
            'content' => 'お問い合わせフォームです。',
            'menu_order' => 90,
        ),
        'privacy-policy' => array(
            'title' => 'プライバシーポリシー',
            'slug' => 'privacy-policy',
            'template' => 'page.php',
            'content' => 'プライバシーポリシーの内容です。',
            'menu_order' => 100,
        ),
    );
}

/**
 * Kiểm tra page có tồn tại không
 */
function aston_page_exists($slug)
{
    $page = get_page_by_path($slug);
    return !empty($page);
}

/**
 * Tạo page mới
 */
function aston_create_page($page_data)
{
    $page_args = array(
        'post_title' => $page_data['title'],
        'post_name' => $page_data['slug'],
        'post_content' => $page_data['content'],
        'post_status' => 'publish',
        'post_type' => 'page',
        'post_author' => 1,
        'menu_order' => $page_data['menu_order'],
    );

    $page_id = wp_insert_post($page_args);

    if ($page_id && !is_wp_error($page_id)) {
        // Set page template
        if (!empty($page_data['template']) && $page_data['template'] !== 'page.php') {
            update_post_meta($page_id, '_wp_page_template', $page_data['template']);
        }
        return $page_id;
    }

    return false;
}

/**
 * Kiểm tra và hiển thị thông báo về pages bị thiếu
 */
function aston_check_missing_pages()
{
    // Chỉ hiển thị cho admin
    if (!current_user_can('manage_options')) {
        return;
    }

    $required_pages = aston_get_required_pages();
    $missing_pages = array();

    foreach ($required_pages as $key => $page_data) {
        if (!aston_page_exists($page_data['slug'])) {
            $missing_pages[$key] = $page_data;
        }
    }

    if (!empty($missing_pages)) {
        add_action('admin_notices', function () use ($missing_pages) {
            ?>
            <div class="notice notice-warning is-dismissible">
                <p><strong>⚠️ Astonテーマ：</strong> 以下のページが見つかりません：</p>
                <ul style="list-style: disc; margin-left: 20px;">
                    <?php foreach ($missing_pages as $key => $page): ?>
                        <li>
                            <strong><?php echo esc_html($page['title']); ?></strong>
                            (<?php echo esc_html($page['slug']); ?>)
                        </li>
                    <?php endforeach; ?>
                </ul>
                <p>
                    <a href="<?php echo admin_url('admin.php?page=aston-setup-pages'); ?>" class="button button-primary">
                        自動作成する
                    </a>
                    <a href="<?php echo admin_url('post-new.php?post_type=page'); ?>" class="button">
                        手動作成する
                    </a>
                </p>
            </div>
            <?php
        });
    }
}
add_action('admin_init', 'aston_check_missing_pages');

/**
 * Thêm menu admin để quản lý pages
 */
function aston_add_setup_pages_menu()
{
    add_theme_page(
        'ページ設定',
        'ページ設定',
        'manage_options',
        'aston-setup-pages',
        'aston_setup_pages_page'
    );
}
add_action('admin_menu', 'aston_add_setup_pages_menu');

/**
 * Trang admin để tạo/khôi phục pages
 */
function aston_setup_pages_page()
{
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }

    // Xử lý tạo pages
    if (isset($_POST['aston_create_pages']) && check_admin_referer('aston_create_pages_action')) {
        $required_pages = aston_get_required_pages();
        $created = array();
        $skipped = array();

        foreach ($required_pages as $key => $page_data) {
            if (aston_page_exists($page_data['slug'])) {
                $skipped[] = $page_data['title'];
            } else {
                $page_id = aston_create_page($page_data);
                if ($page_id) {
                    $created[] = $page_data['title'];
                }
            }
        }

        if (!empty($created)) {
            echo '<div class="notice notice-success"><p>✅ 作成されたページ: ' . implode(', ', $created) . '</p></div>';
        }
        if (!empty($skipped)) {
            echo '<div class="notice notice-info"><p>ℹ️ すでに存在するページ: ' . implode(', ', $skipped) . '</p></div>';
        }
    }

    $required_pages = aston_get_required_pages();
    ?>
    <div class="wrap">
        <h1>🏗️ Astonテーマ - ページ設定</h1>
        <p>このページでは、テーマに必要なページの作成・確認ができます。</p>

        <table class="wp-list-table widefat fixed striped">
            <thead>
                <tr>
                    <th>ページ名</th>
                    <th>スラッグ</th>
                    <th>テンプレート</th>
                    <th>状態</th>
                    <th>操作</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($required_pages as $key => $page_data):
                    $exists = aston_page_exists($page_data['slug']);
                    $page = get_page_by_path($page_data['slug']);
                    ?>
                    <tr>
                        <td><strong><?php echo esc_html($page_data['title']); ?></strong></td>
                        <td><code><?php echo esc_html($page_data['slug']); ?></code></td>
                        <td><code><?php echo esc_html($page_data['template']); ?></code></td>
                        <td>
                            <?php if ($exists): ?>
                                <span style="color: green;">✅ 存在</span>
                            <?php else: ?>
                                <span style="color: red;">❌ 未作成</span>
                            <?php endif; ?>
                        </td>
                        <td>
                            <?php if ($exists): ?>
                                <a href="<?php echo get_edit_post_link($page->ID); ?>" class="button button-small">
                                    編集
                                </a>
                                <a href="<?php echo get_permalink($page->ID); ?>" class="button button-small" target="_blank">
                                    表示
                                </a>
                            <?php else: ?>
                                <span style="color: #999;">—</span>
                            <?php endif; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <form method="post" style="margin-top: 20px;">
            <?php wp_nonce_field('aston_create_pages_action'); ?>
            <p>
                <button type="submit" name="aston_create_pages" class="button button-primary button-large">
                    🚀 不足しているページを自動作成する
                </button>
            </p>
            <p class="description">
                ※ すでに存在するページはスキップされます。<br>
                ※ メニューへの追加は手動で行ってください（外観 → メニュー）。
            </p>
        </form>

        <hr style="margin: 30px 0;">

        <h2>📋 メニューの設定方法</h2>
        <ol>
            <li><a href="<?php echo admin_url('nav-menus.php'); ?>">外観 → メニュー</a> に移動</li>
            <li>新しいメニューを作成、または既存のメニューを選択</li>
            <li>左側の「ページ」から上記のページを選択して「メニューに追加」をクリック</li>
            <li>メニューの位置を「Primary Menu」に設定して保存</li>
        </ol>

        <h2>🎨 ページテンプレートについて</h2>
        <ul>
            <li><code>page-company.php</code> - 会社情報専用テンプレート（ACF対応）</li>
            <li><code>page-antiques.php</code> - アンティーク専用テンプレート</li>
            <li><code>page.php</code> - 標準ページテンプレート</li>
        </ul>
    </div>
    <?php
}

/**
 * Thêm hướng dẫn trong admin bar
 */
function aston_admin_bar_menu($wp_admin_bar)
{
    if (!current_user_can('manage_options')) {
        return;
    }

    $required_pages = aston_get_required_pages();
    $missing_count = 0;

    foreach ($required_pages as $page_data) {
        if (!aston_page_exists($page_data['slug'])) {
            $missing_count++;
        }
    }

    if ($missing_count > 0) {
        $wp_admin_bar->add_node(array(
            'id' => 'aston-missing-pages',
            'title' => '⚠️ ページ未作成 (' . $missing_count . ')',
            'href' => admin_url('admin.php?page=aston-setup-pages'),
            'meta' => array(
                'class' => 'aston-missing-pages-alert',
                'title' => $missing_count . '個のページが見つかりません',
            ),
        ));
    }
}
add_action('admin_bar_menu', 'aston_admin_bar_menu', 100);
