@section('title', __('African Stock Images'))
@include('layouts.ordinary_header')

@extends('layouts.searchnavbar')

<!--   navigation ends-->
<!--		second section-->

<!-- Product Catagories Area Start -->
<div class="products-catagories-area clearfix mt-push-top">

    <div class="amado-pro-catagory clearfix">

    @include('layouts.image_listing')

    </div>
    {{ $images->links() }}
</div>
<!-- Product Catagories Area End -->


<!--		Footer section-->
@include('layouts.footercity')
<script type="text/javascript">

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    $('i.fa-heart, i.fa-heart-o').click(function () {
        var id = $(this).parents(".single-products-catagory").data('id');
        var c = $('#' + this.id + '-bs3').html();
        var cObjId = this.id;
        var cObj = $(this);

        $.ajax({
            type: 'POST',
            url: '/like',
            data: {id: id},
            success: function (data) {
                if (data.success) {
                    console.log('successss');
                } else {
                    console.log('successss1');
                }
            },
            error: function (req, textStatus, errorThrown) {
                //this is going to happen when you send logic source code different from a 200 success OK HTTP
                alert('Ooops, logic source code happened: ' + textStatus + ' ' + errorThrown);

            }
        });

    });

    $(document).delegate('*[data-toggle="lightbox"]', 'click', function (event) {
        event.preventDefault();
        $(this).ekkoLightbox();
    });


</script>
