		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark">

			<div class="container" style="width:70%">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap clearfix">

					

						<div class="col_one_fourth">

							<div class="widget widget_links clearfix">

								<h4 style="text-transform:none; letter-spacing:0px; color:white">Soutenez<br>la photo</h4>

								<a href="#" class="button button-rounded button-reveal button-large button-border tright"><i class="icon-signal"></i>
								<span style="text-transform:none; letter-spacing:0px; color:white">faire un don</span></a>

							</div>

						</div>
						
						<div class="col_one_fourth">

							<div class="widget widget_links clearfix">

								<h4 style="color:white; font-size:13px;">Initiative portée par :</h4>
								<hr style="width:20px;height:2px; border-top-width: 2px; margin-top: -18px; margin-left: 0px; border-color:white;">

								<img src="<?php echo $root; ?>/images/presentation-pharmacie.png" alt="iteatime">

							</div>

						</div>
						

						<div class="col_one_fourth">

							<div class="widget widget_links clearfix">

								<h4 style="color:white; font-size:13px;">Rubriques</h4>
								<hr style="width:20px;height:2px; border-top-width: 2px; margin-top: -18px; margin-left: 0px; border-color:white;">

								<ul>
									
									<li><a href="#" style="padding-left: 0px;">Titre illisible</a></li>
									<li><a href="#" style="padding-left: 0px;">Titre illisible</a></li>
									<li><a href="#" style="padding-left: 0px;">Titre illisible</a></li>
									<li><a href="#" style="padding-left: 0px;">Titre illisible</a></li>
									<li><a href="#" style="padding-left: 0px;">Titre illisible</a></li>
									
								</ul>

							</div>

						</div>

					

					<div class="col_one_fourth col_last">

							

							<div class="widget widget_links clearfix">

								<h4 style="color:white; font-size:13px;">youtube</h4>
								<hr style="width:20px;height:2px; border-top-width: 2px; margin-top: -18px; margin-left: 0px; border-color:white;">

								<img src="<?php echo $root; ?>/images/presentation-pharmacie.png" alt="iteatime">

							</div>

						

					</div>
				</div><!-- .footer-widgets-wrap end -->

			</div>

			

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script type="text/javascript" src="<?php echo $root; ?>/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo $root; ?>/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script type="text/javascript" src="<?php echo $root; ?>/js/functions.js"></script>
	<script type="text/javascript" src="<?php echo $root; ?>/js/components/bs-filestyle.js"></script>
	
	<script  type="text/javascript">
		$(document).on('ready', function() {
			$("#input-5").fileinput({showCaption: false});

			$("#input-6").fileinput({
				showUpload: false,
				maxFileCount: 10,
				mainClass: "input-group-lg",
				showCaption: true
			});

			$("#input-8").fileinput({
				mainClass: "input-group-md",
				showUpload: true,
				previewFileType: "image",
				browseClass: "btn btn-success",
				browseLabel: "Pick Image",
				browseIcon: "<i class=\"icon-picture\"></i> ",
				removeClass: "btn btn-danger",
				removeLabel: "Delete",
				removeIcon: "<i class=\"icon-trash\"></i> ",
				uploadClass: "btn btn-info",
				uploadLabel: "Upload",
				uploadIcon: "<i class=\"icon-upload\"></i> "
			});

			$("#input-9").fileinput({
				previewFileType: "text",
				allowedFileExtensions: ["txt", "md", "ini", "text"],
				previewClass: "bg-warning",
				browseClass: "btn btn-primary",
				removeClass: "btn btn-default",
				uploadClass: "btn btn-default",
			});

			$("#input-10").fileinput({
				showUpload: false,
				layoutTemplates: {
					main1: "{preview}\n" +
					"<div class=\'input-group {class}\'>\n" +
					"   <div class=\'input-group-btn\'>\n" +
					"       {browse}\n" +
					"       {upload}\n" +
					"       {remove}\n" +
					"   </div>\n" +
					"   {caption}\n" +
					"</div>"
				}
			});

			$("#input-11").fileinput({
				maxFileCount: 10,
				allowedFileTypes: ["image", "video"]
			});

			$("#input-12").fileinput({
				showPreview: false,
				allowedFileExtensions: ["zip", "rar", "gz", "tgz"],
				elErrorContainer: "#errorBlock"
			});
		});

	</script>

</body>
</html>