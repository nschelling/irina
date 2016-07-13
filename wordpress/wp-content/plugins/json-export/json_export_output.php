<?php


if(isset($_POST['Submit']))
{

$postsData = get_posts(array(
    'post_type'   => $_POST['content_type'],
    'post_status' => 'publish',
    'posts_per_page' => -1
    
    )
);
$jonformatdata=json_encode($postsData);
//print_r($jonformatdata);
///////////////////////////
$file='data.json';

$fp = fopen($file, 'w');
fwrite($fp, $jonformatdata);
fclose($fp);

/////////////////////

?>
<script language="javascript" type="text/javascript">
window.open('data.json','1402899495567','width=700,height=500,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=1,left=0,top=0');
</script>
<?php
}

?>
<form action="" method="post" enctype="multipart/form-data">
<table width="676" height="283" border="1">
  <tr>
    <td height="113" colspan="2">
	<strong>Export in json Format</strong><br/>
	Geeks ,following is the enhanced functionality for admin user to download your post types data in json format.

Look here for <a href="http://json.org/example">standard json formats</a>.

Wordpress default provides in xml format.It is automatically fetching all posts,pages and custom post type 
in the list menu.You can choose one of them and then click the export button to download data in json format
for that choosen post/content type. </td>
  </tr>
  <tr>
    <td width="117" height="101">Content type </td>
    <td width="543"><label>
      <select name="content_type" id="content_type">
	  <?php
	  $post_types = get_post_types();
	  foreach( $post_types as $eachtype)
      {
      $obj = get_post_type_object($eachtype);

        ?>

	  <option value="<?php echo $eachtype; ?>"><?php echo $obj->labels->name; ?></option>
	  <?php
	  }
	  ?>
      </select>
    </label></td>
  </tr>
  <tr>
    <td height="59">&nbsp;</td>
    <td><label>
      <input type="submit" name="Submit" value="Export" />
    </label></td>
  </tr>
</table>
</form>
