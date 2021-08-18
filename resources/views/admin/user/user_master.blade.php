@csrf
<div class="modal-body row">
{{-- immage --}}
    {{-- <div class="form-group col-md-6">
        <label for="">User Image</label>
        <input type="file" name="name" placeholder="Enter name"
        class="form-control name" required max="50">
    </div> --}}
    <!-- name -->
    <div class="form-group col-md-6">
        <label for="">Name</label>
        <input type="text" name="name" placeholder="Enter name"
        class="form-control name" required max="50">
    </div>
    <!-- last_name -->
    <div class="form-group col-md-6">
        <label for="">Last Name</label>
        <input type="text" name="last_name" placeholder="Enter Last Name"
        class="form-control last_name" required max="50">
    </div>
    <!-- email -->
    <div class="form-group col-md-6">
        <label for="">Email</label>
        <input type="email" name="email" placeholder="Enter email"
        class="form-control email" max="50">
    </div>
    <!-- password -->
    <div class="form-group col-md-6">
    <label for="">Password</label>
    <input type="password" name="password" placeholder="Enter password"
    class="form-control password" min=4>
    </div>

</div>
<script>
$(document).ready(function(){
// kicker checkbox

var kicker = $('.mm').val();

$(".isKicker").change(function() {

console.log(kicker);
    if (this.checked) {
        $('.isKicker').val(1);
    } else {
        $('.isKicker').val(0);
    }
});
// punter checkbox
$(".isPunter").change(function() {
    if (this.checked) {
        $('.isPunter').val(1);
    } else {
        $('.isPunter').val(0);
    }
});
// isLongSnapper
$(".isLongSnapper").change(function() {
    if (this.checked) {
        $('.isLongSnapper').val(1);
    } else {
        $('.isLongSnapper').val(0);
    }
});
});
</script>
