<!-- resources/views/products.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="container">
    <div id="product-list">
        @foreach ($products as $product)
            <div class="product">
                <h3>{{ $product->name }}</h3>
                <p>{{ $product->description }}</p>
            </div>
        @endforeach
    </div>
    <div id="loading" style="display: none;">Loading...</div>
</div>

<script>
    let page = 1;

    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() >= $(document).height() - 100) {
            loadMoreProducts();
        }
    });

    function loadMoreProducts() {
        page++;
        $('#loading').show();

        $.ajax({
            url: "{{ route('products.loadMore') }}",
            type: "get",
            data: { page: page },
            success: function(response) {
                $('#loading').hide();
                if(response.data.length > 0) {
                    response.data.forEach(product => {
                        $('#product-list').append(
                        `<div class="product">
                                    <h3>${product.name}</h3>
                                    <p>${product.description}</p>
                                </div>`
                    );
                });
                } else {
                    $(window).off('scroll');
                }
            }
        });
    }
</script>
</body>
</html>

