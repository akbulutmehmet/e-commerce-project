var elems = Array.prototype.slice.call(document.querySelectorAll('.isCover'));

elems.forEach(function(html) {
    var switchery = new Switchery(html);
});

$(function () {
    $("#categories").dataTable();

    $(".isCover").change(function () {
        let $data_url = $(this).data('url');
        let $data = $(this).prop("checked");
        let $product_id = $(this).data("product");
        $.post($data_url,{data:$data,product_id:$product_id},function (response) {
            window.location.reload();
        });
    });

});