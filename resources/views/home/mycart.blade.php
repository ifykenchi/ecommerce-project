<!DOCTYPE html>
<html>

<head>
    @include('home.css')

    <style type="text/css">
        .div_deg {
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 60px;
        }

        table {
            border: 2px solid black;
            text-align: center;
            width: 800px;
        }

        th {
            border: 2px solid black;
            text-align: center;
            color: white;
            font: 20px;
            font-weight: bold;
            background-color: black;
        }

        td {
            border: solid 1px skyblue;
        }

        .cart_value {
            text-align: center;
            margin-bottom: 70px;
            padding: 18px;
        }
    </style>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

    </div>

    <div class="div_deg">
        <table>
            <tr>
                <th>Product Title</th>

                <th>Price</th>

                <th>Image</th>

                <th>Remove</th>
            </tr>

            <?php

            $value = 0;

            ?>

            @foreach ($cart as $cart)
                <tr>
                    <td>{{ $cart->product->title }}</td>
                    <td>{{ $cart->product->price }}</td>
                    <td>
                        <img width="150" height="150" src="/products/{{ $cart->product->image }}" alt="">
                    </td>
                    <td>
                        <a href="{{ url('delete_cart', $cart->id) }}" class="btn btn-danger">Remove</a>
                    </td>
                </tr>

                <?php

                $value = $value + $cart->product->price;

                ?>
            @endforeach

        </table>
    </div>

    <div class="cart_value">
        <h3>Total Value of Cart is : ${{ $value }}</h3>
    </div>


    <!-- info section -->

    @include('home.footer')

    <!-- end info section -->


    <script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
    <script src="{{ asset('js/custom.js') }}"></script>

</body>

</html>
