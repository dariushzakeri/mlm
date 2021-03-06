<?php
	$pageTitle = "Product Category List";
	//get header
	include('v-templates/header.php');
	//include sidebar
	include('v-templates/sidebar.php');
?>


<!--container for content of the website-->
	<div class="span9" id="content_container">
    	<blockquote>
            <p>Product Category List</p>
            <small>
                <cite title="Source Title">List of category of your website.</cite>
            </small>
        </blockquote>
        
        <table class="table table-hover">
        	<thead>
                <tr>
                    <th>Name</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <?php
				//call the method from BLL to get product category list
				$manageData->getCategoryList();							
			?>
                       
        </table>
        
    </div>
</div>
<!--body main container ends here-->

<?php
	//get footer
	include('v-templates/footer.php');
?>