@extends('layouts.site')
@section('title','Trang Chủ')
@section('content')


<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <div class="panel-group category-products" id="accordian">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#ao">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Balo thời trang
                                    </a>
                                </h4>
                            </div>
                            <div id="ao" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <ul>
                                        <li><a href="#">Nike </a></li>
                                        <li><a href="#">Adidas </a></li>
                                        <li><a href="#">Puma</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordian" href="#giay">
                                        <span class="badge pull-right"><i class="fa fa-plus"></i></span>
                                        Balo Nam
                                    </a>
                                </h4>
                            </div>
                            <div id="giay" class="panel-collapse collapse">
                                <div class="panel-body">
                                    
                                    <h4 class="shoes-title">
                                        <a>
                                            Nike
                                        </a>
                                        
                                    </h4>
                                    <h4 class="shoes-title">
                                        <a>
                                            Adidas
                                        </a>
                                        
                                    </h4>
                                    <h4 class="shoes-title">
                                        <a>
                                            Puma
                                        </a>
                                        
                                    </h4>
                                </div>
                            </div>
                        </div>							
                    </div><!--/category-products-->
                </div>
            </div>
            
            <div class="col-sm-10 padding-right">
                <div class="features_items">
                    <h2 class="title text-center">Sản Phẩm</h2>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img src="images/home/adidas.jpg" alt="" />
                                        <h2>240000</h2>
                                        <p>Balo thể thao</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                    <div class="product-overlay">
                                        <div class="overlay-content">
                                            <h2>240000</h2>
                                            <p>Balo thể thao</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/adidas.jpg" alt="" />
                                    <h2>400000</h2>
                                    <p>Balo thể thao</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>400000</h2>
                                        <p>Balo thể thao</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/balo.jpg" alt="" />
                                    <h2>340000</h2>
                                    <p>Balo thời trang Nam</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>340000</h2>
                                        <p>Balo thời trang Nam</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                                <img src="images/home/new.png" class="new" alt="" />
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/ac.jfif" style="max-width:230px;" alt="" />
                                    <h2>340000</h2>
                                    <p>Balo thời trang Nam</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>340000</h2>
                                        <p>Balo thời trang Nam</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                                <img src="images/home/new.png" class="new" alt="" />
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-4">
                        <div class="product-image-wrapper">
                            <div class="single-products">
                                <div class="productinfo text-center">
                                    <img src="images/home/nikee.jpg" alt="" />
                                    <h2>210000</h2>
                                    <p>Balo thời trang nữ</p>
                                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                </div>
                                <div class="product-overlay">
                                    <div class="overlay-content">
                                        <h2>210000</h2>
                                        <p>Balo thời trang nữ</p>
                                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                    </div>
                                </div>
                                <img src="images/home/sale.png" class="new" alt="" />
                            </div>
                        </div>
                    </div>
            
                    
                </div><!--features_items-->
                
                <div class="category-tab"><!--category-tab-->
                    <div class="col-sm-12">
                        <ul class="nav nav-tabs">
                            <li class="active"><a data-toggle="tab">Sale</a></li>
                        </ul>
                    </div>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="sale" >
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/nikee.jpg" alt="" />
                                            <h2>200000</h2>
                                            <p>Balo thời trang nữ</p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/nike.jpg" alt="" />
                                            <h2>210000</h2>
                                            <p>nike </p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/home/tui.jfif" alt="" />
                                            <h2>450000</h2>
                                            <p> Túi đeo chéo </p>
                                            <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
