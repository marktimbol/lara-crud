<?php
namespace App\Acme\Repositories\User;

interface UserRepositoryInterface {

	public function getUser( $id );

	public function store( $data );

	public function paginate( $perPage );

}