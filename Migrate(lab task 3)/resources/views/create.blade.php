
<html>
	<head></head>
	<body>

	

   
		<h1><form action="{{route('iinsert')}}" method="post">
			{{csrf_field()}}
			<table>
				<h3>Product Entry</h3>
			<tr>
			        <td><span>p_name</span></td>
						
                    <td>:<input type="text" name ="name">
                    	 @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
                </tr>
			
				<tr>
					<td><span>p_code</span></td>
					<td>:<input type="text"  name="p_code">
						 @error('p_code')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>

				</tr>
					<tr>
							<td><span>p_dese </span></td>

					<td>:<input type="text"  name="p_dese"> @error('p_dese')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
				</tr>
				<tr>
							<td><span>p_quantity </span></td>

					<td>:<input type="text"  name="p_quantity">
						 @error('p_quantity')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
				</tr>
				<tr>
							<td><span>p_stoke_date</span></td>

					<td>:<input type="text" name="p_stoke_date" >
						 @error('p_stoke_date')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
				</tr>
				
				
				<td><span> p_rating</span></td>
                    
                    <td>:<input type="text" name= "p_rating" > 
                     @error('p_rating')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
                </tr>
				
				<td><span> 	p_purchesed</span></td>
                    
                    <td>:<input type="text" name= "p_purchesed" > 
                     @error('p_purchesed')
                <span class="text-danger">{{$message}}</span>
            @enderror</td>
                </tr>
                <tr>
					<td><input type="submit" value="Insert"></td>
				</tr>
				
				
			</table>


		</form></h1>
		
	</body>
</html>