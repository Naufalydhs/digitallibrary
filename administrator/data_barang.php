<style>
	@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');
	
	.kartub{
		font-family: "Poppins", sans-serif;
		width: 300px;
		height: 400px;
		border: solid;
		border-radius: 10px;
		margin: 20px 10px;
		justify-content: center;
		align-items: center;
		padding: 20px}
	
	.kartub h1{
		height: 70%;
		padding-top: 50px;
		font-size: 30px;
		text-align: center;
		text-ali

	}
	.kartub .tbl{
		width: 100%;
		height: 40px;
		padding: 10px;
		justify-content: center;
		border-radius: 10px;
		margin: 50px 0;
		border: none;
		color: #fff;
		background-color: #333;
		box-shadow: 0 0 10px rgba(0, 0, 0, .1);
		font-size: 16px;
		font-weight: 600;
}
	}
</style>

<div class="row justify-content-around">
	<div class="kartub">
			<h1 >BOOKS</h1>
			<a href="admin.php?url=data_buku"><button type="submit" class="tbl">Add Books</button></a>
		
	</div>
	<div class="kartub col-2">
			<h1>CATEGORIES</h1>
			<a href="admin.php?url=data_kategori"><button type="submit" class="tbl">Add Categories</button></a>
	</div>
	<div class="kartub col-2">
			<h1>CATEGORY RELATIONS</h1>
			<a href="admin.php?url=data_relasi"><button type="submit" class="tbl">Add Relations</button></a>
	</div>
	<div class="kartub col-2">
			<h1>BOOKS STATUS</h1>
			<button type="submit" class="tbl">Status</button>
	</div>
</div>