<?php 
include "header.php";
$id = "";
include "./php/config.php";
if(isset($_GET['id'])){
	$id = $_GET['id'];

}
 $sql = mysqli_query($conn,"SELECT u.rd, u.ner,u.utas,u.tsagAvsanUdur,t.tsag, s.emchilgee,u.Id FROM uilchluulegch as u, tsag as t , uilchilgee as s
                                 WHERE u.id='{$id}' AND t.Id = u.tsagId AND s.Id = u.uilchilgeeId");
     if(mysqli_num_rows($sql) >0){
         while($row = mysqli_fetch_assoc($sql)){

?>
	<div class="span9">
					<div class="content">

						<div class="module">
							<div class="module-head">
								<h3>Forms</h3>
							</div>
							<div class="module-body">

									<!-- <div class="alert">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Warning!</strong> Something fishy here!
									</div>
									<div class="alert alert-error">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Oh snap!</strong> Whats wrong with you? 
									</div>
									<div class="alert alert-success">
										<button type="button" class="close" data-dismiss="alert">×</button>
										<strong>Well done!</strong> Now you are listening me :) 
									</div> -->

									<br />

									<form class="form-horizontal row-fluid">
										
										<div class="control-group">
											<label class="control-label" for="basicinput">Регистерийн дугаар</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="<?= $row['rd']?>" class="span8" disabled>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Нэр</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="<?= $row['ner']?>" class="span8" disabled>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label" for="basicinput">Утас</label>
											<div class="controls">
												<input type="text" id="basicinput" placeholder="<?= $row['utas']?>" class="span8" disabled>
											</div>
										</div>


										<!-- <div class="control-group">
											<label class="control-label" for="basicinput"></label>
											<div class="controls">
												<div class="input-append">
													<input type="text" placeholder="5.000" class="span8"><span class="add-on">$</span>
												</div>
											</div>
										</div>
 -->
										<!-- <div class="control-group">
											<label class="control-label" for="basicinput">Dropdown Button</label>
											<div class="controls">
												<div class="dropdown">
													<a class="dropdown-toggle btn" data-toggle="dropdown" href="#">Dropdown Button <i class="icon-caret-down"></i></a>
													<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
														<li><a href="#">First Row</a></li>
														<li><a href="#">Second Row</a></li>
														<li><a href="#">Third Row</a></li>
														<li><a href="#">Fourth Row</a></li>
													</ul>
												</div>
											</div>
										</div> -->

										<div class="control-group">
											<label class="control-label" for="basicinput">Dropdown</label>
											<div class="controls">
												<select tabindex="1" data-placeholder="Select here.." class="span8">
													<option value="">Select here..</option>
													<option value="Category 1">First Row</option>
													<option value="Category 2">Second Row</option>
													<option value="Category 3">Third Row</option>
													<option value="Category 4">Fourth Row</option>
												</select>
											</div>
										</div>

										<!-- <div class="control-group">
											<label class="control-label">Radiobuttons</label>
											<div class="controls">
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Option one
												</label> 
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Option two
												</label> 
												<label class="radio">
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Option three
												</label>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label">Inline Radiobuttons</label>
											<div class="controls">
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked="">
													Option one
												</label> 
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
													Option two
												</label> 
												<label class="radio inline">
													<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
													Option three
												</label>
											</div>
										</div>

										<div class="control-group">
											<label class="control-label">Checkboxes</label>
											<div class="controls">
												<label class="checkbox">
													<input type="checkbox" value="">
													Option one
												</label>
												<label class="checkbox">
													<input type="checkbox" value="">
													Option two
												</label>
												<label class="checkbox">
													<input type="checkbox" value="">
													Option three
												</label>
											</div>
										</div> -->

									<!-- 	<div class="control-group">
											<label class="control-label">Inline Checkboxes</label>
											<div class="controls">
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option one
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option two
												</label>
												<label class="checkbox inline">
													<input type="checkbox" value="">
													Option three
												</label>
											</div>
										</div>
 -->
										<div class="control-group">
											<label class="control-label" for="basicinput">Өвчтөний биеийн байдал</label>
											<div class="controls">
												<textarea class="span8" rows="5"><?= $row['emchilgee']?></textarea>
											</div>
										</div>

										<div class="control-group">
											<div class="controls">
												<button type="submit" class="btn">Мэдээллийг оруулах</button>
											</div>
										</div>
									</form>
							</div>
						</div>

						
						
					</div><!--/.content-->
				</div><!--/.span9-->
			<?php }}?>
			</div>
		</div><!--/.container-->
	</div><!--/.wrapper-->
<?php include "footer.php"?>