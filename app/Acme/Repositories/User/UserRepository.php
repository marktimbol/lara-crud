<?php
namespace App\Acme\Repositories\User;

use Illuminate\Support\Facades\Mail;
use App\User;

class UserRepository implements UserRepositoryInterface {

	public function getUser( $id ) {

		return User::findOrFail( $id );

	}
	public function store( $data ) {
		return User::create( $data );
	}

	public function paginate( $perPage ) {
		return User::paginate($perPage);
	}

}