
<div class="main-header">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-3 logo-holder">
                <!-- ============================================================= LOGO ============================================================= -->
<div class="logo">
<a href="index.php">
    
    <h2>Điện máy 3H</h2>

</a>
</div>		
</div>
<div class="col-xs-12 col-sm-12 col-md-6 top-search-holder">
<div class="search-area">
<form name="search" method="post" action="search-result.php">
    <div class="control-group">

        <input class="search-field" placeholder="Tìm sản phẩm..." name="product" required="required" />

        <button class="search-button" type="submit" name="search"></button>    

    </div>
</form>
</div><!-- /.search-area -->
<!-- ============================================================= SEARCH AREA : END ============================================================= -->				</div><!-- /.top-search-holder -->

<div class="col-xs-12 col-sm-12 col-md-3 animate-dropdown top-cart-row">
                <!-- ============================================================= SHOPPING CART DROPDOWN ============================================================= -->





{{-- Show cart in session --}}

@if ($cart->existsCart())
    <div class="dropdown dropdown-cart">
        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
                <div class="total-price-basket">
                    <span class="total-price">
                        {{-- Total money --}}
                        <span class="value">
                            {{
                                number_format(array_reduce($cart->getCart(), function ($a, $b) {
                                    return $a + $b->productPrice;
                                }))
                            }}
                        </span>
                        <span class="sign">VND</span>
                    </span>
                </div>
                <div class="basket">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
                <div class="basket-item-count"><span class="count">
                    {{ count($cart->getCart()) }}    
                </span></div>
            
            </div>
        </a>
        <ul class="dropdown-menu">
            <li>
                <div class="cart-item product-summary">
                    @foreach ($cart->getCart() as $each)
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="image">
                                <a href="product-details?productName={{$each->productName}}">
                                    <img  src="public/productimages/{{$each->id}}/{{$each->productImage1}}" width="35" height="50" 
                                        alt="{{ $each->productName }}">
                                </a>
                            </div>
                        </div>
                        <div class="col-xs-7">
                            
                            <h3 class="name"><a href="product-details.php?pid="></a></h3>
                            <div class="price">{{ number_format($each->productPrice) }} VND</div>
                        </div>
                    </div>
                    @endforeach
                </div><!-- /.cart-item -->
                <div class="clearfix"></div>
                <hr>
                <div class="clearfix cart-total">
                    <div class="pull-right">
                        
                            <span class="text">Total :  {{
                                number_format(array_reduce($cart->getCart(), function ($a, $b) {
                                    return $a + $b->productPrice;
                                }))
                            }} VND
                            </span>

                            <span class='price'>Rs.</span>
                            
                    </div>
                
                    <div class="clearfix"></div>
                        
                    <a href="my-cart" class="btn btn-upper btn-primary btn-block m-t-20">My Cart</a>	
                </div><!-- /.cart-total-->
                    
                
            </li>
        </ul><!-- /.dropdown-menu-->
    </div><!-- /.dropdown-cart -->
@else
    <div class="dropdown dropdown-cart">
        <a href="#" class="dropdown-toggle lnk-cart" data-toggle="dropdown">
            <div class="items-cart-inner">
                <div class="total-price-basket">
                    <span class="total-price">
                        <span class="value">00.00</span>
                        <span class="sign">VND</span>
                    </span>
                </div>
                <div class="basket">
                    <i class="glyphicon glyphicon-shopping-cart"></i>
                </div>
                <div class="basket-item-count"><span class="count">0</span></div>
            
            </div>
        </a>
        <ul class="dropdown-menu">
        

        
        
            <li>
                <div class="cart-item product-summary">
                    <div class="row">
                        <div class="col-xs-12">
                            Your Shopping Cart is Empty.
                        </div>
                        
                        
                    </div>
                </div><!-- /.cart-item -->
            
                
            <hr>
        
            <div class="clearfix cart-total">
                
                <div class="clearfix"></div>
                    
                <a href="index.php" class="btn btn-upper btn-primary btn-block m-t-20">Continue Shooping</a>	
            </div><!-- /.cart-total-->
                    
                
        </li>
        </ul><!-- /.dropdown-menu-->
    </div>
@endif





<!-- ============================================================= SHOPPING CART DROPDOWN : END============================================================= -->				</div><!-- /.top-cart-row -->
        </div><!-- /.row -->

    </div><!-- /.container -->

</div>