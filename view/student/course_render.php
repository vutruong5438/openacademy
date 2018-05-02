<?php include_once('view/student/header.php'); ?>

<div class="container">
	<div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h2>Chuyên Mục</h2>
                    </div>
                </div>
            </div>
        </div>
	<div class="content mt-3">
		<div class="animated fadeIn">
			<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-header">
							<strong class="card-title" v-if="headerText"><?php echo $data_render['course_name']; ?></strong>
						</div>
						<div class="card-body">
								<?php echo $data_render['body']; ?>
								<?php foreach ($question as $key => $quizz): ?>
				                  	<div class="row form-group">
									<div class="col col-md-9"><label class=" form-control-label"><?php echo $quizz['question']; ?></label></div>
									<div class="col col-md-3">
										<div class="form-check">
											<div class="radio">
												<label for="radio<?php echo $quizz['id']; ?>" class="form-check-label ">
													<input type="radio" id="radio<?php echo $quizz['id']; ?>" name="radio<?php echo $quizz['id']; ?>" value="true" class="form-check-input">True
												</label>
											</div>
											<div class="radio">
												<label for="radio<?php echo $quizz['id']; ?>" class="form-check-label ">
													<input type="radio" id="radio<?php echo $quizz['id']; ?>" name="radio<?php echo $quizz['id']; ?>" value="fale" class="form-check-input">False
												</label>
											</div>
										</div>
									</div>
									</div>
				                 <?php endforeach ?>
								<!-- <div class="row form-group">
									<div class="col col-md-9"><label class=" form-control-label">What's your name?</label></div>
									<div class="col col-md-3">
										<div class="form-check">
											<div class="radio">
												<label for="radio1" class="form-check-label ">
													<input type="radio" id="radio1" name="radios" value="option1" class="form-check-input">True
												</label>
											</div>
											<div class="radio">
												<label for="radio2" class="form-check-label ">
													<input type="radio" id="radio2" name="radios" value="option2" class="form-check-input">False
												</label>
											</div>
										</div>
									</div>
								</div> -->
								
								<div class="row form-group">
									<div class="col col-md-12"><span>Exam:  <?php echo $exam['question']; ?></span></div>
									<form class="col col-md-12" id="form" name="f2" method="POST">
										<div class="col col-md-12">
											<button type="button" id="st" name="st" class="btn btn-primary btn-sm">Run Code</button>

											<button type="button" id="check-code" name="check-code" class="btn btn-primary btn-sm">Check Code</button>
										</div>

										<div class="col col-md-12">
											<br>
											<div id="result-check-code"></div>
										</div>

										<div class="col col-md-8">
											<label for="ta">Write Your Code</label>
											<textarea name="code" cols="9" rows="9" placeholder="Code..." class="form-control">    #include <iostream>
    using namespace std;
     
    int main()
    {
    	cout << "Hello World" << endl;
     
    	cin.get();
    	return 0;
    }</textarea>
										</div>
										<div class="col col-md-4">
											<label for="in">Enter Your Input</label>
											<textarea name="input" cols="9" rows="9" placeholder="Input" class="form-control"></textarea>
										</div>
									</form>
								

										<script type="text/javascript">
										//wait for page load to initialize script
											$(document).ready(function(){
											    //listen for form submission
											    $("#st").on('click', function(e){

											    	$("#div").html("Loading ......");
												    //prevent form from submitting and leaving page
												    e.preventDefault();

											      // AJAX 
											     	$.ajax({
											            type: "POST", //type of submit
											            cache: false, //important or else you might get wrong data returned to you
											            url: "compile.php", //destination
											            datatype: "html", //expected data format from process.php
											            data: $('form').serialize(), //target your form's data and serialize for a POST
											            success: function(output) { // data is the var which holds the output of your process.php

											                // locate the div with #result and fill it with returned data from process.php
											                $('#div').html(output);
											            }, 
											            error: function(error) {
											            	console.log(error);
											            }
											        });
											    });

											    $("#check-code").on('click', function(e){
												    //prevent form from submitting and leaving page
												    e.preventDefault();

												    $("#result-check-code").html(
												    	'<div class="alert alert-info">' + 
												    	'Loading...' + 
												    	'</div>'
												    );

											      // AJAX 
											     	$.ajax({
											            type: "POST", //type of submit
											            cache: false, //important or else you might get wrong data returned to you
											            url: "student.php?action=compiler&id=<?php echo $exam['id']; ?>", //destination
											            datatype: "html", //expected data format from process.php
											            data: $('form').serialize(), //target your form's data and serialize for a POST
											            success: function(output) { // data is the var which holds the output of your process.php

											                // locate the div with #result and fill it with returned data from process.php
											                $('#result-check-code').html(output);
											            }
											        });
											    });
											});
										</script>
										<div class="col col-md-12">
											<label for="out">Output</label>
											<textarea name="div" id="div" cols="9" rows="5" placeholder="Output" class="form-control"></textarea>
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


<?php include_once('view/student/footer.php'); ?>