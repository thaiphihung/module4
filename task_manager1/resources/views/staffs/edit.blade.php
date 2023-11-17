<!DOCTYPE html>
<html>
<body>

<h2>HTML Forms</h2>

<form action="<?php echo route('staff.update',1) ?>" method="POST"> 
  
@csrf
@method('put')
<label for="name">Name:</label><br>
  <input type="text" id="name" name="name" value="{{ $staff->name }}">
  @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
  <br>
  <label for="age">Age:</label><br>
  <input type="text" id="age" name="age" value="{{ $staff->age }}"><br><br>
  <label for="email">Email:</label><br>
  <input type="text" id="email" name="email" value="{{ $staff->email }}"><br>
  @error('email')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror<br>
  <input type="submit" value="Submit">
</form> 

<p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>

</body>
</html>