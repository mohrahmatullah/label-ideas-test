	<script src="<?php echo base_url('assets/jquery/jquery-1.12.0.min.js'); ?>"></script>
	<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/jquery.dataTables.min.js'); ?>"></script>
	<script type="text/javascript" src="<?php echo base_url('assets/bootstrap/js/dataTables.bootstrap4.min.js'); ?>"></script>
	<script type="text/javascript">
		$(document).ready(function() {
		    $('#book-table').DataTable();
		});

		$(document).ready(function(){      
	      var i=1;
	      var b=0;
	      $('#add').click(function(){  
	           i++;  
	           b++;
	           $('#dynamic_field').append('<tr id="row'+i+'" class="dynamic-added">\
	           								<td>\
	           									<input type="text" name="alamat['+b+'][detail]" class="form-control name_list" required />\
	           								</td>\
	           								<td><input type="checkbox" id="1" name="alamat['+b+'][preferred]" class="form-control" value="1" /></td>\
	           								<td>\
	           									<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button>\
	           								</td>\
	           								</tr>');  
	      });
	  
	      $(document).on('click', '.btn_remove', function(){  
	           var button_id = $(this).attr("id");   
	           $('#row'+button_id+'').remove();  
	      });  
	  
	    });

	    $(document).ready(function(){      
	      var i=1;
	      var b=0;
	      var ad=$('#adres').val(); 
	      $('#add_add').click(function(){  
	           i++;  
	           b++;
	           $('#dynamic_field_add').append('<tr id="row'+i+'" class="dynamic-added">\
	           									<input type="hidden" name="alamat['+b+'][user_id]" class="form-control name_list" value="'+ad+'" />\
	           								<td>\
	           									<input type="text" name="alamat['+b+'][detail]" class="form-control name_list" required />\
	           								</td>\
	           								<td><input type="checkbox" id="1" name="alamat['+b+'][preferred]" class="form-control" value="1" /></td>\
	           								<td>\
	           									<button type="button" name="remove" id="'+i+'" class="btn btn-danger btn_remove">-</button>\
	           								</td>\
	           								</tr>');  
	      });
	  
	      $(document).on('click', '.btn_remove_add', function(){  
	           var button_id = $(this).attr("id");   
	           $('#row_add'+button_id+'').remove();  
	      });  
	  
	    });   

	    $("input:checkbox").on('click', function() {
		  // in the handler, 'this' refers to the box clicked on
		  var $box = $(this);
		  if ($box.is(":checked")) {
		    // the name of the box is retrieved using the .attr() method
		    // as it is assumed and expected to be immutable
		    var group = "input:checkbox[id='1']";
		    // the checked state of the group/box on the other hand will change
		    // and the current value is retrieved using .prop() method
		    $(group).prop("checked", false);
		    $box.prop("checked", true);
		  } else {
		    $box.prop("checked", false);
		  }
		});
	</script>
</body>
</html>