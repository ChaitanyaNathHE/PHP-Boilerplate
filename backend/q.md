<p>You need to create an App to create items and stores that can be assigned to items.</p>

<p><strong>Technical specifications</strong></p>

<ul>
	<li><strong>Backend&nbsp;</strong>

	<ul>
		<li>Laravel</li>
	</ul>
	</li>
	<li><strong>Database&nbsp;</strong>
	<ul>
		<li>SQLite3</li>
	</ul>
	</li>
	<li><strong>Port&nbsp;</strong>
	<ul>
		<li>8000</li>
	</ul>
	</li>
</ul>

<h2>Tasks:&nbsp;</h2>

<h2>Models</h2>

<p>You need to create two models</p>

<p>Item</p>

<ul>
	<li>Item Model class
	<ul>
		<li>ItemStoreManagement/app/Models/Item.php</li>
	</ul>
	</li>
	<li>fields
	<ul>
		<li>name</li>
        <li>description</li>
        <li>price</li>
        <li>quantity</li>
        <li>image</li>		
	</ul>
	</li>
	<li>all above fields should be fillable</li>
	<li>Write the logic to implement the many-to-many relationship between the item and store model</li>
</ul>

<p>Store</p>

<ul>
	<li>Store Model class
	<ul>
		<li>ItemStoreManagement/app/Models/Store.php</li>
	</ul>
	</li>
	<li>fields
	<ul>
		<li>name</li>
	</ul>
	</li>
	<li>all above fields should be fillable</li>
	<li>Write the logic to implement the many-to-many relationship between the item and store model</li>
</ul>

<h2>Controllers</h2>

<p>You need to create two controllers</p>

<p>ItemController</p>

<ul>
	<li>ItemStoreManagement/app/Http/Controllers/ItemController.php</li>
</ul>

<p>In the item controller, you need to write the following methods</p>

<ol>
	<li>index - Write the logic to get all the items and return it as JSON in the response</li>
	<li>store - Write the logic to validate the request which should contain the name of the item as a string and create a new item and return the item as JSON in the response</li>
	<li>show - Write the logic to get the item by id and return it as JSON in the response</li>
	<li>update - Write the logic to validate the request which should contain the name of the item as a string and update the item and return the item as JSON in the response</li>
	<li>destroy - Write the logic to delete the item by id and return the item as JSON in the response</li>
	<li>addStore - Write the logic to validate the request which should contain the store id as an integer and add the store to the item and return the item as JSON in the response</li>
	<li>removeStore - Write the logic to validate the request which should contain the store id as an integer and remove the store from the item and return the item as JSON in the response</li>
</ol>

<p>StoreController</p>

<ul>
	<li>ItemStoreManagement/app/Http/Controllers/StoreController.php</li>
</ul>

<p>In the store controller you need to write the following methods</p>

<ol>
	<li>index - Write the logic to get all the stores and return it as JSON in the response</li>
	<li>store - Write the logic to validate the request which should contain the name of the store as a string and create a new store and return the store as JSON in the response</li>
	<li>show - Write the logic to get the store by id and return it as JSON in the response</li>
	<li>update - Write the logic to validate the request which should contain the name of the store as a string and update the store and return the store as JSON in the response</li>
	<li>destroy - Write the logic to delete the store by id and return the store as JSON in the response</li>
</ol>

<p><strong>Note</strong></p>

<p>When you make any changes to the backend files in the backend folder, use the following commands in the terminal to ensure that your changes are reflected in the preview</p>

<ul>
	<li>cd backend/</li>
	<li>php artisan test</li>
</ul>

<p><strong>Submission criteria</strong></p>

<ol>
	<li>After you write your code, click&nbsp;<strong>Run&nbsp;</strong>to execute it<strong>.</strong></li>
	<li>Once the execution is complete, click&nbsp;<strong>Submit code</strong>.</li>
</ol>

<p><strong>Testing criteria</strong>&nbsp;</p>

<p>The project is hosted on<a href="https://he-ide.hackerearth.com/"> <u>https://he-ide.hackerearth.com/</u></a>&lt;generated-hash&gt;/. After submitting your code, click <strong>Preview</strong> to test the functionality of the application.</p>
