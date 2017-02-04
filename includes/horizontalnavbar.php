<?php
	
	//dynamic navigation bar in the search page
		$journal_count=0;
		$bchap_count=0;
		$book_count=0;
		$conf_count=0;
		$misc_count=0;
		$all_count=0;		
		
		//count number of journals
		if($query_string!=NULL || isset($_SESSION['slarray'])){
			$journal_query="select count(*) from publication_table where (".$sidebar_query_string.") and (doc_id in (select doc_id from doctype_table where doc_type='Article'))";
			$journal_result=mysqli_query($connection,$journal_query);
			$journal_row=mysqli_fetch_row($journal_result);
			$journal_count=$journal_row[0];
			
			//count no of books
			$book_query="select count(*) from publication_table where (".$sidebar_query_string.") and (doc_id in (select doc_id from doctype_table where doc_type='Book'))";
			$book_result=mysqli_query($connection,$book_query);
			$book_row=mysqli_fetch_row($book_result);
			$book_count=$book_row[0];
		
			//count no of book chapter
			$bchap_query="select count(*) from publication_table where (".$sidebar_query_string.") and (doc_id in (select doc_id from doctype_table where doc_type='Book Chapter'))";
			$bchap_result=mysqli_query($connection,$bchap_query);
			$bchap_row=mysqli_fetch_row($bchap_result);
			$bchap_count=$bchap_row[0];
			
			//count no of conference paper
			$conf_query="select count(*) from publication_table where (".$sidebar_query_string.") and (doc_id in (select doc_id from doctype_table where doc_type='Conference Paper'))";
			$conf_result=mysqli_query($connection,$conf_query);
			$conf_row=mysqli_fetch_row($conf_result);
			$conf_count=$conf_row[0];
			
			//count no of misc
			$misc_query="select count(*) from publication_table where (".$sidebar_query_string.") and (doc_id not in (select doc_id from doctype_table where doc_type='Conference Paper' or doc_type='Book Chapter' or doc_type='Book' or doc_type='Article'))";
			$misc_result=mysqli_query($connection,$misc_query);
			$misc_row=mysqli_fetch_row($misc_result);
			$misc_count=$misc_row[0];
			
			//all downloads
			/*$all_query="select count(*) from publication_table where (".$sidebar_query_string.") and doc_id in (select doc_id from doctype_table)";
			$all_result=mysqli_query($connection,$all_query);
			$all_row=mysqli_fetch_row($all_result);
			$all_count=$all_row[0];*/
		
		}
?>
<style>
#horizontal-nav-bar{
	width:1000px;
	padding-left:10px;
	margin-left:239px;	
}
.closeme{
	display:inline-block;
	padding:10px 10px 10px 10px;
	background-color:#F93;	
	color:black;
	border-radius:10px 10px 0px 0px;
	height:20px;
	margin-left:-5px;
}


#jour:hover{
	cursor:pointer;	
}
#book:hover{
	cursor:pointer;	
}
#bookc:hover{
	cursor:pointer;	
}
#conf:hover{
	cursor:pointer;	
}
#misc:hover{
	cursor:pointer;	
}
#nav-link{
	margin-left:10px;	
}
.info_total{
	display:inline-block;
	padding:10px 20px 10px 20px;
	color:black;
	height:20px;
	margin-left:10px;
	background-color:#F93;	
}
</style>
<div id='horizontal-nav-bar'>
	<a class='nav-link' href='index.php'><div class='closeme btn'> Search </div></a>
    <a class='nav-link' href='analyzer.php?col=author'><div class='closeme btn'>Analyse </div></a>
    <div class='closeme' id='jour'> Journal<?php if($journal_count>1) echo 's'; ?>(<?php echo $journal_count;?>) </div>
    <div class='closeme' id='book'> Book<?php if($book_count>1) echo 's'; ?>(<?php echo $book_count;?>)</div>
    <div class='closeme' id='bookc'> Book Chapter<?php if($bchap_count>1) echo 's'; ?>(<?php echo $bchap_count;?>)</div>
    <div class='closeme' id='conf'> Conference Paper<?php if($conf_count>1) echo 's'; ?>(<?php echo $conf_count;?>)</div>
    <div class='closeme' id='misc'> Misc (<?php echo $misc_count;?>)</div>
    
   <!-- <div class='info_total '> Total (<?php echo $all_count;?>)</div> -->
</div>