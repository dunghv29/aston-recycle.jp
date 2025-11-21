<?php
define('PAGE_SIZE', 10);

/** Custom Pagination Generate
 * @param $total
 * @param $page
 * @param $itemsPerPage
 */
function customPagination($total, $page, $itemsPerPage) {
    echo '<nav aria-label="Page navigation example" class="text-center">';
    $paginate = paginate_links(array(
        'base' => add_query_arg('paged', '%#%'),
        'format' => '?paged=%#%',
        'current' => $page,
        'total' => ceil($total / $itemsPerPage),
        'prev_text' => __('&laquo;'),
        'next_text' => __('&raquo;'),
        'type' => 'list'
    ));
    $paginate = str_replace("<ul class='page-numbers'>", '<ul class="pagination">', $paginate);
    $paginate = str_replace('<a class="page-numbers"', "<a class='page-link'", $paginate);
    $paginate = str_replace('<a class="next page-numbers"', "<a class='next page-link'", $paginate);
    $paginate = str_replace('<a class="prev page-numbers"', "<a class='prev page-link'", $paginate);
    $paginate = str_replace('<span aria-current="page" class="page-numbers current">', '<li class="page-item active"><span aria-current="page" class="page-link">', $paginate);
    echo str_replace("<li>", '<li class="page-item">', $paginate);
    echo '</nav>';
}

function showMessage()
{
    if (isset($_SESSION['success'])) : ?>
        <div class="notice notice-success is-dismissible">
            <p style="color: green"><?= $_SESSION['success'] ?></p>
            <button type="button" class="notice-dismiss"><span
                        class="screen-reader-text">Dismiss this notice.</span>
            </button>
        </div>
        <?php unset($_SESSION['success']);
    endif;
}