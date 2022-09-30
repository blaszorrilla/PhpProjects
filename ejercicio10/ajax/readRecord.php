<?php
	// include Database connection file 
	include("db_connection.php");

	// Design initial table header 
	$data = '<table class="table table-bordered table-striped">
						<tr>
							
							<th>Nombre</th>
							<th>Apellido</th>
							<th>C.I</th>
							<th>Telefono</th>
							<th>Direccion</th>
							
							<th></th>
							<th></th>
						</tr>';

	$query = "SELECT * FROM usuario ORDER BY id DESC";

	if (!$result = mysqli_query($con, $query)) {
        exit(mysqli_error($con));
    }

    // if query results contains rows then featch those rows 
    if(mysqli_num_rows($result) > 0)
    {
    	$number = 1;
    	while($row = mysqli_fetch_assoc($result))
    	{
    		$data .= '<tr>
				
				<td>'.$row['nombre'].'</td>
				<td>'.$row['apellido'].'</td>
				<td>'.$row['ci'].'</td>
				<td>'.$row['telefono'].'</td>
				<td>'.$row['direccion'].'</td>
				<td>
					<button onclick="GetUserDetails('.$row['id'].')" class="btn btn-warning"><i class="fas fa-edit"></i></button>
				</td>
				<td>
					<button onclick="DeleteUser('.$row['id'].')" class="btn btn-danger"><i class="far fa-trash-alt"></i></button>
				</td>
    		</tr>';
    		$number++;
    	}
    }
    else
    {
    	// records now found 
    	$data .= '<tr><td colspan="6">No hay registros!</td></tr>';
    }

    $data .= '</table>';

    echo $data;
?>