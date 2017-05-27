<?php
	require("../php/management/unLogin.php");
?>
	<div class="content_wrapper">

		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-12">
					<aside>
						<header><i class="fa fa-fw fa-home"></i>工作台</header>
						<section>
							<div class="container-fluid">
								<div class="row">
									<div class="col-sm-12">
										<div class="my_panel">
											<div class="heading">欢迎信息</div>
											<div class="body">您好：<span id="username"></span> ，您上一次登录时间：<span id="lastTime"></span>，登录IP：<span id="lastIP"></span></div>
										</div>
										<div class="my_panel">
											<div class="heading">系统信息</div>
											<div class="body">
												<table class="table table-striped">
													<tbody>
														<tr>
															<td width="200">软件版本</td>
															<td id="softVersion">version 1.0</td>
														</tr>
														<tr>
															<td>操作系统</td>
															<td id="OS"></td>
														</tr>
														<tr>
															<td>PHP版本</td>
															<td id="phpVersion"></td>
														</tr>
														<tr>
															<td>MYSQL版本</td>
															<td id="MySQLVersion"></td>
														</tr>
														<tr>
															<td>服务器端信息</td>
															<td id="serverVersion"></td>
														</tr>
														<!--<tr>
															<td>最大上传限制</td>
															<td id="maxFileSize"></td>
														</tr>-->
														<tr>
															<td>最大执行时间</td>
															<td id="maxExecutionTime"></td>
														</tr>
													</tbody>
												</table>
											</div>
										</div>
									</div>
								</div>
							</div>
						</section>
					</aside>
				</div>
			</div>
		</div>

	</div>
	<script src="../js/management/main.js" type="text/javascript" charset="utf-8"></script>