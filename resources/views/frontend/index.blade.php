@extends('layouts.app')

@section('content')

<?php
$s="select * from posts";
$con=mysqli_connect("127.0.0.1","root","","blog"); 
if($con)
{
$rs=mysqli_query($con,$s);
while($fr=mysqli_fetch_array($rs))
{
$subject=$fr[1];
$posts=$fr[2];
$img=$fr[3];
?>

    <div class="col-sm-6">
<div class="container col-sm-8">
       
    <div class="panel panel-default">
        <div class="panel-heading"><?php echo $subject; ?></div>
        
        <div class="panel-body">
            <img src="/images/<?php echo $img; ?>" style="height: 150px; width:200px;" class="img-thumbnail" name="img" />
        </div>	
        <div class="panel-body">
            <p><?php echo $posts; ?></p>
        </div>

    </div>
</div>
</div>           
<?php
}	

}

?>
@endsection

