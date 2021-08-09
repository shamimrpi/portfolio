

	<script src="{{asset('public/backend')}}/assets/js/jquery.min.js"></script>
	<script type="text/javascript" src="{{asset('public/backend')}}/assets/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="{{asset('public/backend')}}/assets/js.custom.js"></script>
  <script type="text/javascript" src="{{asset('public/backend')}}/assets/js/jquery.validation.js"></script>
  <script src="{{asset('public/backend')}}/assets/js/sweetalert.js"></script>

 

<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

$.notify({
  // options
  message: 'Hello World' 
},{
  // settings
  type: 'danger'
});
</script>
<script type="text/javascript">
$(document).ready(function () {
 
 
 
$('#aboutForm').validate({ // initialize the plugin
 
    rules: {
 
        name: {
 
            required: true
 
        },
 
        qualification: {
 
            required: true
 
 
        },
 
        post: {
 
            required: true,
 
 
        },
        project: {
 
            required: true,
            digits: true
 
 
        },
          age: {
 
            required: true,
 
 
        },
        experience: {
 
            required: true,
 
 
        },
         lang: {
 
            required: true,
 
 
        },
       
 
    }

 
});
 
});
 
</script>

<script type="text/javascript">
$(document).ready(function () {
 
     
     
    $('#educationForm').validate({ // initialize the plugin
     
        rules: {
     
            year: {
     
                required: true,
                digits: true
     
            },
     
            exam_name: {
     
                required: true
     
     
            },
     
            institute_name: {
     
                required: true,
     
     
            },
            result: {
     
                required: true,
                
     
     
            },
              duration: {
     
                required: true,
                digits: true
     
     
            },
            
     
        }

     
    });
 
});
 
</script>


<script type="text/javascript">
$(document).ready(function () {
 
     
     
    $('#skillForm').validate({ // initialize the plugin
     
        rules: {
     
            fonts: {
     
                required: true,
              
     
            },
     
            name: {
     
                required: true
     
     
            },
     
           
            
     
        }

     
    });
 
});
 
</script>

<script type="text/javascript">
  $(document).ready(function(){
     // image show javascript
     $("#imgload").change(function () {
        if (this.files && this.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#showImage').attr('src', e.target.result);
            }
            reader.readAsDataURL(this.files[0]);
        }
    });
  });

// when delete data confirm box

   $(".sa-delete").on('click',function(){
        let form_id = $(this).data("form-id");
        swal({
              title: "Are you sure?",
              text: "Once deleted, you will not be able to recover this imaginary file!",
              icon: "warning",
              buttons: true,
              dangerMode: true,
            })
            .then((willDelete) => {
              if (willDelete) {
                $('#'+form_id).submit();
                
              }
            });
        });
</script>
</body>
</html>