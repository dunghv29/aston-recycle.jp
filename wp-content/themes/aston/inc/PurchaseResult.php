<?php

function purchaseResultInit()
{
    if (!current_user_can('manage_options')) {
        wp_die(__('You do not have sufficient permissions to access this page.'));
    }
    purchaseResultIndex();
}

function purchaseResultIndex()
{
    global $wpdb;
    $post_per_page = isset($_GET['pageSize']) ? abs((int)$_GET['pageSize']) : PAGE_SIZE;
    $page = isset($_GET['paged']) ? abs((int)$_GET['paged']) : 1;
    $offset = ($page * $post_per_page) - $post_per_page;
    $queryCount = "SELECT COUNT(*) FROM {$wpdb->prefix}purchase_result as p";
    $sql = "SELECT p.*, t.title as type_title FROM {$wpdb->prefix}purchase_result as p JOIN {$wpdb->prefix}m_type as t on t.id = p.type ";
    if (isset($_GET['date']) && $_GET['date']) {
        $sqlSearch = " WHERE DATE(p.created_at) = '{$_GET['date']}'";
        $sql .= $sqlSearch;
        $queryCount .= $sqlSearch;
    }
    if (isset($_GET['type']) && $_GET['type']) {
        if (isset($sqlSearch)) {
            $sqlSearch = " AND p.type = '{$_GET['type']}'";
        } else {
            $sqlSearch = " WHERE p.type = '{$_GET['type']}'";
        }
        $sql .= $sqlSearch;
        $queryCount .= $sqlSearch;
    }
    $sql .= " ORDER BY created_at DESC LIMIT $post_per_page OFFSET $offset";
    $total = $wpdb->get_var($queryCount);
    if (isset($_GET['action']) && $_GET['action'] === 'store') {
        formPurchaseResult();
        return;
    }
    $results = $wpdb->get_results($sql);
    $types = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}m_type");
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
        label {
            display: inline-block;
            margin-bottom: .5rem;
        }
        .line-5 {
            display: -webkit-box;
            -webkit-line-clamp: 5;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
    <div class="wrap">
        <h1 class="wp-heading-inline">買取り実績</h1>
        <?= showMessage() ?>
        <a href="?page=purchase-result&action=store" class="page-title-action">新規追加</a>
        <form method="get" action="<?= esc_url(admin_url('admin.php')); ?>">
            <input type="hidden" name="page" value="purchase-result">
            <p class="search-box">
                <label>作成日</label>
                <input type="date" name="date" value="<?= $_GET['date'] ?>">
                <select name="type" style="vertical-align: unset">
                    <option value="">カテゴリーを選択...</option>
                    <?php foreach ($types as $type):?>
                    <option value="<?=$type->id?>" <?=$type->id == $_GET['type'] ? 'selected' : ''?>><?=$type->title?></option>
                    <?php endforeach?>
                </select>
                <button type="submit" class="button">検索</button>
            </p>
        </form>
        <div class="tablenav top">
            <div class="tablenav-pages">
                <span class="displaying-num"><?= $total ?>項</span>
            </div>
        </div>
        <table class="wp-list-table widefat fixed striped table-view-list" style="width: 100%;">
            <thead>
            <tr>
                <th width="60">ID</th>
                <th>カテゴリー</th>
                <th>タイトル1</th>
                <th>写真1</th>
                <th>タイトル2</th>
                <th>写真2</th>
                <th>タイトル3</th>
                <th>写真3</th>
                <th>タイトル4</th>
                <th>写真4</th>
                <th>作成日</th>
                <th width="80" class="action">操作</th>
            </tr>
            </thead>
            <tbody>
            <?php if ($total == 0) echo " <tr><td colspan='12' style='text-align: center'>データがありません。</td></tr>" ?>
            <?php foreach ($results as $row): ?>
                <tr>
                    <td><?= $row->id ?></td>
                    <td><?= $row->type_title ?></td>
                    <td><span class="line-5"><?= $row->title1 ?></span></td>
                    <td><?= $row->image1 ? '<img style="width: 100%; max-height: 165px" src="'.$row->image1.'"/>' : '' ?></td>
                    <td><span class="line-5"><?= $row->title2 ?></span></td>
                    <td><?= $row->image2 ? '<img style="width: 100%; max-height: 165px" src="'.$row->image2.'"/>' : '' ?></td>
                    <td><span class="line-5"><?= $row->title3 ?></span></td>
                    <td><?= $row->image3 ? '<img style="width: 100%; max-height: 165px" src="'.$row->image3.'"/>' : '' ?></td>
                    <td><span class="line-5"><?= $row->title4 ?></span></td>
                    <td><?= $row->image4 ? '<img style="width: 100%; max-height: 165px" src="'.$row->image4.'"/>' : '' ?></td>
                    <td><?= $row->created_at ?></td>
                    <td class="action">
                        <a class="d-inline-block" href="?page=purchase-result&action=store&id=<?= $row->id ?>"
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
                            <input type="hidden" name="action" value="remove_purchase_result"/>
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
                <th>カテゴリー</th>
                <th>タイトル1</th>
                <th>写真1</th>
                <th>タイトル2</th>
                <th>写真2</th>
                <th>タイトル3</th>
                <th>写真3</th>
                <th>タイトル4</th>
                <th>写真4</th>
                <th>作成日</th>
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

function formPurchaseResult()
{
    global $wpdb;
    wp_enqueue_media();
    $result = '';
    if (isset($_GET['id']) && $_GET['id']) {
        $id = abs((int)$_GET['id']);
        $sql = "SELECT * FROM {$wpdb->prefix}purchase_result where id = '{$id}' LIMIT 1";
        $result = $wpdb->get_row($sql);
    }
    $listType = $wpdb->get_results("SELECT * FROM {$wpdb->prefix}m_type");
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
            .img-fluid {
                max-width: 205px;
                max-height: 165px;
                cursor: pointer;
            }
            .description {
                color : red;
            }
        </style>
    <div class="wrap">
        <h1 class="wp-heading-inline"><?= (!isset($_GET['id']) || $_GET['id'] =='' ? '品目追加' : '品目編集') ?></h1>
        <form method="post" action="<?= esc_url(admin_url('admin.php')); ?>" enctype="multipart/form-data" id="myForm">
            <input type="hidden" name="action"
                   value="<?= $result && $result->id ? 'edit_purchase_result' : 'add_purchase_result' ?>"/>
            <input type="hidden" name="id" value="<?= $result && $result->id ? $result->id :''?>">
            <table class="form-table" role="presentation">
                <tbody>
                <tr class="form-field form-required">
                    <th scope="row"><label for="type">カテゴリー<span class="description">*</span></label>
                    </th>
                    <td>
                        <select style="width: 100%;" class="form-control" id="type" name="type">
                            <?php foreach ($listType as $type): ?>
                            <option value="<?=$type->id?>" <?=$result && $result->type == $type->id ? 'selected' : ''?>><?=$type->title?></option>
                            <?php endforeach ?>
                        </select>
                    </td>
                </tr>
                <tr class="form-field form-required">
                    <th scope="row"><label for="post_code">タイトル1</label>
                    </th>
                    <td>
                        <input onchange="this.value=jQuery.trim(this.value)" type="text" class="form-control" name="title1" maxlength="255"
                               value="<?= $result ? $result->title1 : '' ?>">
                    </td>
                </tr>
                <tr class="form-field form-required">
                    <th scope="row"><label for="post_code">写真1</label>
                    </th>
                    <td>
                        <div onclick="deleteImage(this)" style="position: relative; display: inline-block; cursor: pointer">
                            <span style="display: inline-block;
                            position: absolute;
                            border: 1px solid #000;
                            right: -11px;
                            width: 30px;
                            border-radius: 50%;
                            height: 30px;background-color: #fefefee8;
    border: 1px solid #e1c1c1;
                            top: -10px;">
                                <svg width="30px" height="30px" viewBox="0 0 16 16" class="icon-delete bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                            </span>
                            <img src="<?=$result && $result->image1 ? $result->image1 : get_stylesheet_directory_uri() . '/images/no-image-available.png'?>" class="img-fluid rounded plupload-browse-button">
                            <input type="hidden" value="<?=$result && $result->image1 ? $result->image1 : ''?>" class="form-control" name="image1">
                        </div>
                    </td>
                </tr>
                <tr class="form-field form-required">
                    <th scope="row"><label for="post_code">タイトル2</label>
                    </th>
                    <td>
                        <input onchange="this.value=jQuery.trim(this.value)" type="text" class="form-control" name="title2" maxlength="255"
                               value="<?= $result ? $result->title2 : '' ?>">
                    </td>
                </tr>
                <tr class="form-field form-required">
                    <th scope="row"><label for="post_code">写真2</label>
                    </th>
                    <td>
                        <div onclick="deleteImage(this)" style="position: relative; display: inline-block; cursor: pointer">
                            <span style="display: inline-block;
                            position: absolute;
                            border: 1px solid #000;
                            right: -11px;
                            width: 30px;
                            border-radius: 50%;
                            height: 30px;background-color: #fefefee8;
    border: 1px solid #e1c1c1;
                            top: -10px;">
                                <svg width="30px" height="30px" viewBox="0 0 16 16" class="icon-delete bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                            </span>
                            <img src="<?=$result && $result->image2 ? $result->image2 : get_stylesheet_directory_uri() . '/images/no-image-available.png'?>" class="img-fluid rounded plupload-browse-button">
                            <input type="hidden" value="<?=$result && $result->image2 ? $result->image2 : ''?>" class="form-control" name="image2">
                        </div>
                    </td>
                </tr>
                <tr class="form-field form-required">
                    <th scope="row"><label for="post_code">タイトル3</label>
                    </th>
                    <td>
                        <input onchange="this.value=jQuery.trim(this.value)" type="text" class="form-control" name="title3" maxlength="255"
                               value="<?= $result ? $result->title3 : '' ?>">
                    </td>
                </tr>
                <tr class="form-field form-required">
                    <th scope="row"><label for="post_code">写真3</label>
                    </th>
                    <td>
                        <div onclick="deleteImage(this)" style="position: relative; display: inline-block; cursor: pointer">
                            <span style="display: inline-block;
                            position: absolute;
                            border: 1px solid #000;
                            right: -11px;
                            width: 30px;
                            border-radius: 50%;
                            height: 30px;background-color: #fefefee8;
    border: 1px solid #e1c1c1;
                            top: -10px;">
                                <svg width="30px" height="30px" viewBox="0 0 16 16" class="icon-delete bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                            </span>
                            <img src="<?=$result && $result->image3 ? $result->image3 : get_stylesheet_directory_uri() . '/images/no-image-available.png'?>" class="img-fluid rounded plupload-browse-button">
                            <input type="hidden" class="form-control" value="<?=$result && $result->image3 ? $result->image3 : ''?>" name="image3">
                        </div>
                    </td>
                </tr>
                <tr class="form-field form-required">
                    <th scope="row"><label for="post_code">タイトル4</label>
                    </th>
                    <td>
                        <input onchange="this.value=jQuery.trim(this.value)" type="text" class="form-control" name="title4" maxlength="255"
                               value="<?= $result ? $result->title4 : '' ?>">
                    </td>
                </tr>
                <tr class="form-field form-required">
                    <th scope="row"><label for="post_code">写真4</label>
                    </th>
                    <td>
                        <div onclick="deleteImage(this)" style="position: relative; display: inline-block; cursor: pointer">
                            <span style="display: inline-block;
                            position: absolute;
                            border: 1px solid #000;
                            right: -11px;
                            width: 30px;
                            border-radius: 50%;
                            height: 30px;background-color: #fefefee8;
    border: 1px solid #e1c1c1;
                            top: -10px;">
                                <svg width="30px" height="30px" viewBox="0 0 16 16" class="icon-delete bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                                                </svg>
                            </span>
                            <img src="<?=$result && $result->image4 ? $result->image4 : get_stylesheet_directory_uri() . '/images/no-image-available.png'?>" class="img-fluid rounded plupload-browse-button">
                            <input type="hidden" value="<?=$result && $result->image4 ? $result->image4 : ''?>" class="form-control" name="image4">
                        </div>
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
    <script>
        function deleteImage(element)
        {
            var image = jQuery(element).parent('td').find('img');
            var input = jQuery(element).parent('td').find('input');
            jQuery(image).attr('src', '<?=get_stylesheet_directory_uri() ?>/images/no-image-available.png');
            jQuery(input).val('');
        }
        jQuery('.plupload-browse-button').on( 'click', function(e){
            e.preventDefault();
            const button = jQuery(this),
                custom_uploader = wp.media({
                    title: '画像を添付',
                    library : {
                        type : 'image'
                    },
                    button: {
                        text: 'この画像を使い'
                    },
                    multiple: false
                }).on('select', function() {
                    const attachment = custom_uploader.state().get('selection').first().toJSON();
                    button.attr('src', attachment.url).show();
                    button.next().val(attachment.url);
                }).open();
        });
        jQuery("#myForm").submit(function(e) {
            var title1 = jQuery('input[name="title1"]').val();
            var title2 = jQuery('input[name="title2"]').val();
            var title3 = jQuery('input[name="title3"]').val();
            var title4 = jQuery('input[name="title4"]').val();
            if (!title1 && !title2 && !title3 && !title4) {
                e.preventDefault();
                alert('タイトルは入力必須です!');
            }
        });
    </script>
    <?php
}


add_action('wp_ajax_get_purchase', 'getPurchase');
add_action("wp_ajax_nopriv_get_purchase", "getPurchase");
function getPurchase()
{
    $id = $_GET['id'];
    global $wpdb;
    $data = $wpdb->get_row("SELECT * FROM {$wpdb->prefix}purchase_result WHERE id = {$id} LIMIT 1");
    $arr = [];
    if ($data->title1) {
        $arr[] = [
                'title' => $data->title1,
                'link' => $data->image1 ?? get_stylesheet_directory_uri() . '/images/uploads/thumb1019-2.png'
        ];
    }
    if ($data->title2) {
        $arr[] = [
                'title' => $data->title2,
                'link' => $data->image2 ?? get_stylesheet_directory_uri() . '/images/uploads/thumb1019-2.png'
        ];
    }
    if ($data->title3) {
        $arr[] = [
                'title' => $data->title3,
                'link' => $data->image3 ?? get_stylesheet_directory_uri() . '/images/uploads/thumb1019-2.png'
        ];
    }
    if ($data->title4) {
        $arr[] = [
                'title' => $data->title4,
                'link' => $data->image4 ?? get_stylesheet_directory_uri() . '/images/uploads/thumb1019-2.png'
        ];
    }
    return wp_send_json([
            'code' => 200,
            'data' => $arr
        ]);
}

add_action('admin_action_add_purchase_result', 'addPurchaseResult');
add_action('admin_action_nopriv_add_purchase_result', 'addPurchaseResult');
function addPurchaseResult()
{
    global $wpdb;
    $title1 = htmlspecialchars($_POST['title1']);
    $title2 = htmlspecialchars($_POST['title2']);
    $title3 = htmlspecialchars($_POST['title3']);
    $title4 = htmlspecialchars($_POST['title4']);
    $type = $_POST['type'];
    $image1 = $_POST['image1'];
    $image2 = $_POST['image2'];
    $image3 = $_POST['image3'];
    $image4 = $_POST['image4'];
    $tableName = $wpdb->prefix . 'purchase_result';
    $wpdb->insert($tableName, [
        'type' => $type,
        'title1' => $title1,
        'title2' => $title2,
        'title3' => $title3,
        'title4' => $title4,
        'image1' => $image1,
        'image2' => $image2,
        'image3' => $image3,
        'image4' => $image4,
        'created_at' => date('Y-m-d H:i:s')
    ]);
    $_SESSION['success'] = "データの保存は成功しました！";
    wp_redirect('admin.php?page=purchase-result');
}

add_action('admin_action_edit_purchase_result', 'editPurchaseResult');
add_action('admin_action_nopriv_edit_purchase_result', 'editPurchaseResult');

function editPurchaseResult()
{
    global $wpdb;
    $id = $_POST['id'];
    $title1 = htmlspecialchars($_POST['title1']);
    $title2 = htmlspecialchars($_POST['title2']);
    $title3 = htmlspecialchars($_POST['title3']);
    $title4 = htmlspecialchars($_POST['title4']);
    $type = $_POST['type'];
    $image1 = $_POST['image1'];
    $image2 = $_POST['image2'];
    $image3 = $_POST['image3'];
    $image4 = $_POST['image4'];
    $data = [
        'type' => $type,
        'title1' => $title1,
        'title2' => $title2,
        'title3' => $title3,
        'title4' => $title4,
        'image1' => $image1,
        'image2' => $image2,
        'image3' => $image3,
        'image4' => $image4
    ];
    $tableName = $wpdb->prefix . 'purchase_result';
    $wpdb->update($tableName, $data, array('id' => $id));
    $_SESSION['success'] = "データの保存は成功しました！";
    wp_redirect('admin.php?page=purchase-result');
}

add_action('admin_action_remove_purchase_result', 'removePurchaseResult');
function removePurchaseResult()
{
    global $wpdb;
    $id = $_POST['id'];
    $tableName = $wpdb->prefix . 'purchase_result';
    $wpdb->delete(
        $tableName,
        ['id' => $id]
    );
    $_SESSION['success'] = 'データの削除は成功しました！';
    wp_redirect('admin.php?page=purchase-result');
    exit();
}
?>
