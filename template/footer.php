			</div> <!-- end container-fluid -->
                </div> <!-- end content -->

		<!-- Footer Start -->
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                <?php echo date('Y'); ?> &copy; Streets Live <em>(HackGT 2019 Team)</em></a>
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    <a href="#">About Us</a>
                                    <a href="#">Help</a>
                                    <a href="#">Contact Us</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- end Footer -->

            </div>

            <!-- ============================================================== -->
            <!-- End Page content -->
            <!-- ============================================================== -->

        </div>
        <!-- END wrapper -->

        <!-- Right Sidebar -->
        <div class="right-bar">
            <div class="rightbar-title">
                <a href="javascript:void(0);" class="right-bar-toggle float-right">
                    <i class="mdi mdi-close"></i>
                </a>
                <h5 class="m-0 text-white">Settings</h5>
            </div>
            <div class="slimscroll-menu">
                <hr class="mt-0">
                <h5 class="pl-3">Basic Settings</h5>
                <hr class="mb-0" />


                <div class="p-3">
                    <div class="custom-control custom-checkbox mb-2">
                        <input type="checkbox" class="custom-control-input" id="customCheck1" checked>
                        <label class="custom-control-label" for="customCheck1">Dark Mode</label>
                    </div>
                </div>

                <!-- Timeline -->
                <hr class="mt-0" />
                <h5 class="pl-3 pr-3">Timeline</h5>
                <hr class="mb-0" />

                <div class="p-3">
                    <ul class="list-unstyled activity-widget">
                        <li class="activity-list">
                            <p class="mb-0"><small>08 July</small></p>
                            <p>Neque porro quisquam est</p>
                        </li>
                        <li class="activity-list">
                            <p class="mb-0"><small>09 July</small></p>
                            <p>Ut enim ad minima veniam quis velit esse </p>
                        </li>
                        <li class="activity-list">
                            <p class="mb-0"><small>10 July</small></p>
                            <p>Quis autem vel eum iure</p>
                        </li>
                    </ul>
                </div>

            </div> <!-- end slimscroll-menu-->
        </div>
        <!-- /Right-bar -->

        <!-- Right bar overlay-->
        <div class="rightbar-overlay"></div>

        <!-- Vendor js -->
        <script src="/assets/js/vendor.min.js"></script>

        <!-- Bootstrap select plugin -->
        <script src="/assets/libs/bootstrap-select/bootstrap-select.min.js"></script>

        <!-- plugins -->
        <script src="/assets/libs/c3/c3.min.js"></script>
        <script src="/assets/libs/d3/d3.min.js"></script>

        <!-- dashboard init -->
        <script src="/assets/js/pages/dashboard.init.js"></script>

        <!-- App js -->
        <script src="/assets/js/app.min.js"></script>

	<script>
		// search bar fixes
		$(".app-search-box input").on('focus', function() {
			$(this).parent().animate({ width: '300px' });
			$(this).animate({ backgroundColor: 'rgba(255, 255, 255, .25)' });
		});
		$(".app-search-box input").on('blur', function() {
			$(this).parent().animate({ width: '150px' }); 
			$(this).animate({ backgroundColor: 'rgba(255, 255, 255, .07)' });
		});
	</script>
        
    </body>
</html>
