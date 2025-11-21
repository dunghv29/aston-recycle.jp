<?php

function typeInit()
{
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    typeIndex();
}

function typeIndex()
{
    global $wpdb;
    $post_per_page = isset($_GET['pageSize']) ? abs((int)$_GET['pageSize']) : PAGE_SIZE;
    $page = isset($_GET['paged']) ? abs((int)$_GET['paged']) : 1;
    $offset = ($page * $post_per_page) - $post_per_page;
    $queryCount = "SELECT COUNT(*) FROM {$wpdb->prefix}m_type";
    $sql = "SELECT * FROM {$wpdb->prefix}m_type";
    if (isset($_GET['s'])) {
        $keyWord = htmlspecialchars($_GET['s']);
        $sqlSearch = " WHERE title LIKE '%{$keyWord}%'";
        $sql .= $sqlSearch;
        $queryCount .= $sqlSearch;
    }
    $sql .= " LIMIT $post_per_page OFFSET $offset";
    $total = $wpdb->get_var($queryCount);
    if (isset($_GET['action']) && $_GET['action'] === 'store') {
        formType();
        return;
    }
    $results = $wpdb->get_results($sql);
    ?>
    <style>
        table tr td svg {
            height: 20px;
            width: 20px;
            cursor: pointer;
        }
        .remove-btn {
            border: none;
            background-color: transparent;
        }
        .pagination {
            display: -ms-flexbox;
            display: flex;
            padding-left: 0;
            list-style: none;
            border-radius: .25rem;
        }
        .page-link {
            position: relative;
            display: block;
            padding: .5rem .75rem;
            margin-left: -1px;
            line-height: 1.25;
            color: #007bff;
            background-color: #fff;
            border: 1px solid #dee2e6;
            text-decoration: none;
        }
        .page-item.active .page-link {
            z-index: 1;
            color: #fff;
            background-color: #007bff;
            border-color: #007bff;
        }
        .row.d-flex.justify-content-center {
            justify-content: center !important;
            display: flex !important;
            flex-wrap: wrap;
            margin-right: -15px;
            margin-left: -15px;
        }
        .text-center {
            text-align: center;
        }
    </style>
    <div class="wrap">
        <h1 class="wp-heading-inline">カテゴリー覧</h1>
        <?= showMessage() ?>
        <a href="?page=type&action=store" class="page-title-action">新規追加</a>
        <form method="get" action="<?= esc_url(admin_url('admin.php')); ?>">
            <input type="hidden" name="page" value="type">
            <p class="search-box">
                <input type="search" placeholder="カテゴリー" id="post-search-input" name="s" value="<?= $_GET['s'] ?? '' ?>">
                <button type="submit" class="button">検索</button>
            </p>
        </form>
        <div class="tablenav top">
            <div class="tablenav-pages">
                <span class="displaying-num"><?= $total ?>項</span>
            </div>
        </div>
        <table class="wp-list-table widefat fixed striped table-view-list">
            <thead>
            <tr>
                <th width="60">ID</th>
                <th>タイトル</th>
                <th width="80" class="action">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($total == 0) echo " <tr><td colspan='3' style='text-align: center'>データがありません。</td></tr>" ?>
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?= $row->id ?></td>
                    <td><?= $row->title ?></td>
                    <td class="action">
                        <a class="d-inline-block" href="?page=type&action=store&id=<?= $row->id ?>"
                           title="編集">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square"
                                 fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"></path>
                                <path fill-rule="evenodd"
                                      d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"></path>
                            </svg>
                        </a>
                        <form method="POST" action="<?= esc_url(admin_url('admin.php')); ?>"
                              class="form-remove"
                              onsubmit="return confirm('削除してもよろしいですか？');"
                              style="display: inline-block">
                            <input type="hidden" name="action" value="remove_type"/>
                            <input type="hidden" name="id" value="<?= $row->id ?>"/>
                            <button class="remove-btn" title="削除">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x-circle"
                                     fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                          d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                    <path fill-rule="evenodd"
                                          d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"></path>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach ?>
            </tbody>
            <tfoot>
            <tr>
                <th width="60">ID</th>
                <th>タイトル</th>
                <th width="80" class="action">操作</th>
            </tr>
            </tfoot>
        </table>
        <div class="tablenav top">
            <div class="tablenav-pages">
                <span class="displaying-num"><?= $total ?>項</span>
            </div>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="mt-3">
                <?php
                customPagination($total, $page, $post_per_page);
                ?>
            </div>
        </div>
    </div>
    <?php
}

function formType()
{
    global $wpdb;
    $result = '';
    if (isset($_GET['id']) && $_GET['id']) {
        $id = abs((int)$_GET['id']);
        $sql = "SELECT * FROM {$wpdb->prefix}m_type where id = '{$id}' LIMIT 1";
        $result = $wpdb->get_row($sql);
    }
    if (isset($_SESSION['flash'])) {
        $sessionMessage = $_SESSION['flash'];
        if (isset($sessionMessage['error'])) {
            $text = "<div class=\"notice notice-error is-dismissible\">
            <p style=\"color: green\">{$sessionMessage['error']}</p>
            <button type=\"button\" class=\"notice-dismiss\"><span
                        class=\"screen-reader-text\">Dismiss this notice.</span>
            </button>
        </div>";
            echo apply_filters('message_error', $text);
        }
        if (isset($sessionMessage['success'])) {
            echo apply_filters('message_success', $sessionMessage['success']);
        }
        unset($_SESSION['flash']);
    }
    ?>
        <style>
            .description {
                color : red;
            }
        </style>
    <div class="wrap">
        <h1 class="wp-heading-inline"><?= (!isset($_GET['id']) || $_GET['id'] =='' ? 'カテゴリー加' : 'カテゴリー編集') ?></h1>
        <form method="post" action="<?= esc_url(admin_url('admin.php')); ?>" enctype="multipart/form-data" id="myForm">
            <input type="hidden" name="action"
                   value="<?= $result && $result->id ? 'edit_type' : 'add_type' ?>"/>
            <input type="hidden" name="id" value="<?= $result && $result->id ? $result->id :''?>">
            <table class="form-table" role="presentation">
                <tbody>
                <tr class="form-field form-required">
                    <th scope="row"><label for="post_code">タイトル<span class="description">*</span></label>
                    </th>
                    <td>
                        <input onchange="this.value=jQuery.trim(this.value)" type="text" class="form-control" name="title" maxlength="255"
                               value="<?= $result ? $result->title : '' ?>" required>
                    </td>
                </tr>
                </tbody>
            </table>
            <p class="submit">
                <button type="submit" class="button button-primary">
                    <?= !isset($_GET['id']) || $_GET['id'] =='' ? '追加' : '保存' ?>
                </button>
            </p>
        </form>
    </div>
    <?php
}

add_action('admin_action_add_type', 'addType');
add_action('admin_action_nopriv_add_type', 'addType');
function addType()
{
    global $wpdb;
    $title = htmlspecialchars($_POST['title']);
    $tableName = $wpdb->prefix . 'm_type';
    $checkDuplicate =  $wpdb->get_var("SELECT COUNT(*) FROM {$wpdb->prefix}m_type WHERE title = '{$title}' LIMIT 1");
    if ($checkDuplicate != 0) {
        $_SESSION['flash']['error'] = 'カテゴリーが既存在です。';
        wp_redirect('admin.php?page=type&action=store');
        exit();
    }
    $wpdb->insert($tableName, [
        'title' => $title,
    ]);
    $_SESSION['success'] = "データの保存は成功しました！";
    wp_redirect('admin.php?page=type');
}

add_action('admin_action_edit_type', 'editType');
add_action('admin_action_nopriv_edit_type', 'editType');

function editType()
{
    global $wpdb;
    $id = $_POST['id'];
    $title = htmlspecialchars($_POST['title']);
    $checkDuplicate =  $wpdb->get_var("SELECT COUNT(*) FROM {$wpdb->prefix}m_type WHERE title = '{$title}' AND id <> '{$id}' LIMIT 1");
    if ($checkDuplicate != 0) {
        $_SESSION['flash']['error'] = 'カテゴリーが既存在です。';
        wp_redirect('admin.php?page=type&action=store?id=' . $id);
        exit();
    }
    $data = [
        'title' => $title
    ];
    $tableName = $wpdb->prefix . 'm_type';
    $wpdb->update($tableName, $data, array('id' => $id));
    $_SESSION['success'] = "データの保存は成功しました！";
    wp_redirect('admin.php?page=type');
}

add_action('admin_action_remove_type', 'removeType');
function removeType()
{
    global $wpdb;
    $id = $_POST['id'];
    $tableName = $wpdb->prefix . 'm_type';
    $wpdb->delete(
        $tableName,
        ['id' => $id]
    );
    $wpdb->delete(
        $wpdb->prefix . 'purchase_result',
        ['type' => $id]
    );
    $_SESSION['success'] = 'データの削除は成功しました！';
    wp_redirect('admin.php?page=type');
    exit();
}
?>
