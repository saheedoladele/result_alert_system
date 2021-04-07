$(document).ready(function(){
		
		$('#save').click(function(e){
			e.preventDefault();

			const matricno = $('#matricnumber').val()
			const surname = $('#surname').val()
			const othername = $('#othername').val()
			const gender = $('#gender').val()
			const level = $('#level').val()
			const section = $('#section').val()
			const email = $('#email').val()
			const phoneno = $('#phoneno').val()

			if(!matricno || !surname || !othername || !gender || !level || !section || !email || !phoneno){
				$('#errMsg').addClass('alert alert-danger')
				$('#errMsg').html("You have not fill all the required fields");
				return false;
			}
			else{
				$.ajax({
					method: 'POST',
					url: 'saveStudent.php',
					data: {
						matricno,
						surname,
						othername,
						gender,
						level,
						section,
						email,
						phoneno
					},
					beforeSend: function(){
						$('#msg').addClass('alert alert-success');
						$('#save').html('<i class="fa fa-spinner fa-spin"></i> Saving...');
					},
					success: function(data){
						setTimeout(() => {
							$('#msg').addClass('alert alert-success');
							$('#msg').html(data);
						}, 1500);
					}

				});
			}
		});
//add Lecturers
		$('#addBtn').click(function(e){
			e.preventDefault();
			const staffid = $('#staffid').val();
			const surnames = $('#surnames').val();
			const othernames = $('#othernames').val();
			const title = $('#title').val();
			const username = $('#username').val();
			const password = $('#password').val();

			if(!staffid || !surnames || !othernames || !title || !username || !password){
				$('#errMessage').addClass('alert alert-danger');
				$('#errMessage').html("Fill up all the required fields");
				return false;
			}else{
				$.ajax({
					method: 'POST',
					url: 'saveLecturer.php',
					data: {
						staffid,
						surnames,
						othernames,
						title,
						username,
						password,
					},
					beforeSend: function(){
						$('#addLecturersuccess').addClass('alert alert-success');
						$('#addLecturersuccess').html("Adding Lecturer, Please Wait......");
					},
					success: function(data){
						$('#addLecturersuccess').addClass('alert alert-success');
						$('#addLecturersuccess').html(data);
					}

				});
			}
		});
	
		//login hadler
		$('#login').click(function(e){
			e.preventDefault();
			const usernameAdmin = $('#usernameAdmin').val();
			const passwordAdmin = $('#passwordAdmin').val();
			
			if(!usernameAdmin || !passwordAdmin){
				$('#loginMsg').addClass('alert alert-danger');
				$('#loginMsg').html("You have not enter Username or Password");
			}else{
				$.ajax({
					method: 'POST',
					url : 'adminLogin.php',
					data: {usernameAdmin,
							passwordAdmin,
					},
					beforeSend: function(){
						$('#logSuccess').addClass('alert alert-success');
						$('#loginLecturer').html('<i class="icon-spinner icon-spin"></i> Please Wait.....');
					},
					success: function(response){
						setTimeout(() => {
							$('#logSuccess').addClass('alert alert-success');
						$('#logSuccess').html(response);
						if(response === 'login'){
							 window.location.assign('admin_dash.php');
						}
						}, 2000);
					}
				
				});
			}
		});

		//loginLecturer hadler
		$('#loginLecturer').click(function(e){
			e.preventDefault();
			const usernameLecturer = $('#usernameLecturer').val();
			const passwordLecturer = $('#passwordLecturer').val();
			
			if(!usernameLecturer || !passwordLecturer){
				$('#loginErr').addClass('alert alert-danger');
				$('#loginErr').html("You have not enter Username or Password");
			}else{
				$.ajax({
					method: 'POST',
					url : 'logins.php',
					data: {usernameLecturer,
							passwordLecturer,
					},
					beforeSend: function(){
						$('#logApprove').addClass('alert alert-success');
						$('#loginLecturer').html('<i class="icon-spinner icon-spin"></i> Please Wait.....');
					},
					success: function(response){
						setTimeout(() => {
							$('#logApprove').addClass('alert alert-success');
						$('#logApprove').html(response);
						if(response === 'login'){
							 window.location.assign('lecturer_dash.php');
						}
						}, 2000);
					}
				
				});
			}
		});

		//result fetching;
		$('body').on('change','#rLevel',function(){
			
			let rLevel = $(this).val();
			let rsemester = $('#rsemester').val();
			
			$.ajax({
				method:'POST',
				url: 'getStudent.php',
				data:{rLevel},
				success: function(data){
					let result = data;
      			$('#output').html(result) 
                }
				
				});
			//accessing result endpoint
			$.ajax({
				method:'POST',
				url: 'loadGeneralResult.php',
				data:{rLevel,
					  rsemester,
				},
				success: function(response){
					let myresult = response;
      			$('#sResult').html(myresult) 
                }
				
				});
			});

		//get Matric Number From Class Selected  
		$('body').on('change','#sClass',function(){
			
			let sClass = $(this).val();
			alert("Load "+ sClass+" Student's Matric Numbers");
			$.ajax({
				method:'POST',
				url: 'getSingleStudent.php',
				data:{sClass},
				success: function(data){
					let result = data;
      			$('#outputs').html(result) 
                }
				
				});
			});

		//load single students information and result  
		$('body').on('change','#sMatricNo',function(){
			let dClass = $('#sClass').val();
			let sMatricNo = $(this).val();
			let mysemester = $('#mysemester').val();
			alert("Loading "+ sMatricNo+" Information"+ mysemester);

			$.ajax({
				method:'POST',
				url: 'loadStudent.php',
				data:{sMatricNo,
					  dClass,
				},
				success: function(data){
					let result = data;
      			$('#results').html(result) 
                }
				
				});

			//accessing result endpoint
			$.ajax({
				method:'POST',
				url: 'loadResult.php',
				data:{sMatricNo,
					  dClass,
					  mysemester,
				},
				success: function(response){
					let myresult = response;
      			$('#getResult').html(myresult) 
                }
				
				});

		});

		

	//get Matric Number From Class Selected  
		$('body').on('change','#myClass',function(){
			
			let sClass = $(this).val();
			alert("Load "+ sClass+" Student's Matric Numbers");
			$.ajax({
				method:'POST',
				url: 'getMatric.php',
				data:{sClass},
				success: function(data){
					let result = data;
      			$('#outputs').html(result) 
                }
				
				});
			});

	//load single students information and result for computation  
		$('body').on('change','#matricNumber',function(){
			let myClass = $('#myClass').val();
			let semester = $('#semester').val();
			let matricNumber = $(this).val();
			//alert("Loading "+ sMatricNo+" Information");

			$.ajax({
				method:'POST',
				url: 'loadStudentResult.php',
				data:{matricNumber,
					  myClass,
					  semester,
				},
				success: function(data){
					let result = data;
      			$('#results').html(result) 
                }
				
				});

			//accessing result endpoint
			// $.ajax({
			// 	method:'POST',
			// 	url: 'loadResult.php',
			// 	data:{matricNumber,
			// 		  myClass,
			// 	},
			// 	success: function(response){
			// 		let myresult = response;
   //    			$('#getResult').html(myresult) 
   //              }
				
			// 	});

			});

//Save GPA
$('body').on('click','#saveGPA',function(e){
	e.preventDefault();
	const level = $('#myClass').val();
	const semester = $('#semester').val();
	const matricno = $("#matricNumber").val();
	const gpa = $('#gpa').text();

	$.ajax({
		method:'POST',
		url: 'saveGPA.php',
		data:{
			matricno,
			level,
			semester,
			gpa,
		},
		beforeSend: function(){
						$('#addGpaSuccess').addClass('alert alert-success');
						$('#addGpaSuccess').html('Please Wait.....');
					},
					success: function(response){
						$('#addGpaSuccess').addClass('alert alert-success');
						$('#addGpaSuccess').html(response);
					}
	});
});
//update GPA
$('body').on('click','#updateGPA',function(e){
	e.preventDefault();
	const level = $('#myClass').val();
	const semester = $('#semester').val();
	const matricno = $("#matricNumber").val();
	const gpa = $('#gpa').text();

	$.ajax({
		method:'POST',
		url: 'updateGPA.php',
		data:{
			matricno,
			level,
			semester,
			gpa,
		},
		beforeSend: function(){
						$('#addGpaSuccess').addClass('alert alert-success');
						$('#addGpaSuccess').html('Please Wait.....');
					},
					success: function(response){
						$('#addGpaSuccess').addClass('alert alert-success');
						$('#addGpaSuccess').html(response);
					}
	});
	
});
//Send Email Resul
$('body').on('click','#emailResult',function(e){
	e.preventDefault();
	const rMatricNumber = $('#rMatricNumber').text();
	const rName = $('#rName').text();
	const emailResult = $('#res').val();
	const reSemester = $('#mysemester').val();
	const reLevel = $('#sClass').val();
	const mails = $('#mails').text();
			
	$.ajax({
		method: 'POST',
		url : 'result_email.php',
		data: {rMatricNumber,
				rName,
				emailResult,
				reSemester,
				reLevel,
				mails,
			},
					beforeSend: function(){
						$('#emailSuccess').addClass('alert alert-success');
						$('#emailSuccess').html('Please Wait.....');
					},
					success: function(response){
						$('#emailSuccess').addClass('alert alert-success');
						$('#emailSuccess').html(response);
						// if(response === 'login'){
						// 	 window.location.assign('lecturer_dash.php');
						// }
					}
	});
})
		//Create New Admin
		$('#add_admin').click(function(e){
			e.preventDefault();

			const sur_admin = $('#sur_admin').val();
			const other_admin = $('#other_admin').val();
			const user_admin = $('#user_admin').val();
			const pass_admin = $('#pass_admin').val();
			
			if(!sur_admin || !other_admin || !user_admin || !pass_admin){
				$('#createErr').addClass('alert alert-danger');
				$('#createErr').html("You have not enter all the required fields");
			}
			else{
				$.ajax({
					method: 'POST',
					url : 'createAdmin.php',
					data: {sur_admin,
							other_admin,
							user_admin,
							pass_admin,
					},
					beforeSend: function(){
						$('#createSuccess').addClass('alert alert-success');
						$('#createSuccess').html('Please Wait.....');
					},
					success: function(response){
						$('#createSuccess').addClass('alert alert-success');
						$('#createSuccess').html(response);
						// if(response === 'login'){
						// 	 window.location.assign('lecturer_dash.php');
						// }
					}
				
				});
			}
		});

		});

