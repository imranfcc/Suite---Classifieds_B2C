<nav class="shadow sticky-top navbar-dark py-2 " style="background-color:var(--master-color, #007bff);">
    <div class="container" style="padding-top: max(0px, env(safe-area-inset-top));">
        <div class="row align-items-center ">
            <div class="col-6 col-lg-3 ps-0">
                <i class="fas fa-bars fa-2x btn" data-bs-toggle="modal" data-bs-target="#sh-Modal-LeftSidebar" style=" color:var(--master-color-opposite, #ffffff);"></i>
                <a class="navbar-brand" href="#" style="position: absolute;  top:5px color:var(--master-color-opposite, #ffffff); font-size:150%; font-variant: small-caps; "><strong><?php echo config("Project/LogoText"); ?></strong></a>
            </div>
            <div class="col-lg-6 d-none d-lg-inline">
                <form class="form-inline" action="nl/search" method="GET" style="width:100%; ">
                    <div class="input-group btn-group-lg " style="width:100%;">
                        <input type="text" class="form-control" style="border: none transparent;" name="SearchThis" placeholder="Search" value="">
                        <div class="input-group-append">
                            <button class="btn btn-light rounded-0 rounded-end" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-6 col-lg-3 ">
                <span class="float-end ">
                    <a href="my/dashboard"><i class="fad fa-user fa-2x px-2"  style="color:var(--master-color-opposite, #ffffff);" ></i></a>
                    <a href="my/favourites" class="d-none"><i class="far fa-heart fa-2x px-2" style="color:var(--master-color-opposite, #ffffff);"></i></a>
                    <?php if(function_exists("\P\Cart\count_qty")){ ?>
                        <a href="nl/cart"><i class="fad fa-shopping-cart fa-2x " style="color:var(--master-color-opposite, #ffffff);" ></i><span class="position-absolute top-12 start-85 translate-middle badge rounded-pill bg-success"><?php echo \P\Cart\count_qty(); ?></span></i></a>
                    <?php } ?>
                </span>
            </div>
        </div>
        <div class="row d-lg-none">
            <div class="col-12 px-2 pb-2" >
                <form class="form-inline" action="nl/search" method="GET" style="width:100%;">
                    <div class="input-group btn-group-lg " style="width:100%;">
                        <input type="text" class="form-control" style="border: none transparent;" name="SearchThis" placeholder="Search" value="">
                        <div class="input-group-append">
                            <button class="btn btn-light rounded-0 rounded-end" type="submit"><i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

</nav>
<!-- Left Modal-Sidebar -->
<div class="modal leftSidebar " id="sh-Modal-LeftSidebar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
<div class="modal-dialog">
	<div class="modal-content">

	<!-- Modal Header -->
	<div class="modal-header">
		<h4 class="modal-title">Menu</h4>
		<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
	</div>

	<!-- Modal body -->
	<div class="modal-body">
		<div class="btn-group-vertical rounded-0 btn-group-lg w-100">
		<a href="test.php" class="btn btn-light text-start" >Subscription</a>
		</div>
	</div>

	<!-- Modal footer -->
	<div class="modal-footer">
		<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
	</div>

	</div>
</div>
</div><!-- END : Left Modal-Sidebar  -->
