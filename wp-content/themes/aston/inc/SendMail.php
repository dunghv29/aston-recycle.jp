<?php

add_action('wp_ajax_send_mail_product', 'sendMailProduct');
add_action("wp_ajax_nopriv_send_mail_product", "sendMailProduct");

function sendMailProduct() {
    $uploaddir = __DIR__ . '/../images/'; //Or some other temporary location
    $fileCount = count(array_filter($_FILES["files"]['name']));
    if ($fileCount > 0) {
        for ($i = 0; $i < $fileCount; $i++) {
            if ($fileCount > 10) {
                return wp_send_json (['code' => 400, "message" => "ファイルの合計は10つ以内であるべきです。"]);
            }
            $uploadfile = $uploaddir . $_FILES['files']['name'][$i];
            $allowed = array("img", "gif", "jpg", "gif", "png");
            $filename = $_FILES['files']['name'][$i];
            $ext = pathinfo ($filename, PATHINFO_EXTENSION);
            $ext = strtolower ($ext);
            if (!in_array ($ext, $allowed)) {
                return wp_send_json (['code' => 400, "message" => "拡張タイプは間違っています。"]);
            }
            $fileSize = filesize ($_FILES['files']['tmp_name'][$i]);
            $totalFileSize = 0;
            if ($fileSize > 5242880) {
                $totalFileSize += $fileSize;
                return wp_send_json (['code' => 400, "message" => "ファイルが　5MB　を超えているため、含まれませんでした。"]);
            }
            if ($totalFileSize > 10485760) {
                return wp_send_json (['code' => 400, "message" => "すべてのファイルの合計は10MB未満である必要があります "]);
            }
            move_uploaded_file ($_FILES['files']['tmp_name'][$i], $uploadfile);
            $attachments[$i] = $uploadfile;
        }
    }
    $template_name = "mailRequest";
    $args = ['name' => htmlspecialchars($_POST['name-customer']), 'email' => htmlspecialchars($_POST['email']), 'tel' => htmlspecialchars($_POST['tel']), 'content' => htmlspecialchars($_POST['content_request'])];
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $headers[] = 'From: Aston Style Homepage';
    $headers[] = 'Reply-To: ' . $args['name'] . ' <' . $args['email'] . '>';
    wp_mail(MAIL_SEND_REQUEST,
        'お問い合',
        load_template_part_emails($template_name, $args),
        $headers,
        $attachments
    );
    foreach($attachments as $att) {
        @unlink($att);
    }
    return wp_send_json(['code' => 200, "message" => "メールが正しく送信されました。"]);
}

add_action('wp_ajax_send_mail_registration', 'sendMailRegistration');
add_action("wp_ajax_nopriv_send_mail_registration", "sendMailRegistration");

function sendMailRegistration() {
    $template_name = "mailRecruitment";
    $headers = array(
        'Content-Type: text/html; charset=UTF-8'
    );
    $headers[] = 'From: Aston Style Homepage';
    $headers[] = 'Reply-To: User <' . $_POST['email'] . '>';
    $email = $_POST['email'];
    wp_mail(
        MAIL_SEND_REQUEST,
        '募集中',
        load_template_part_emails($template_name, ['email' => $email]),
        $headers
    );
    return wp_send_json(['code' => 200, "message" => "メールが正しく送信されました。"]);
}

