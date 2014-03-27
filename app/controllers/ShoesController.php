<?php

class ShoesController extends BaseController {

	public function postLogin () {
		$back=URL::to('/');
		$back=' <a href="'.$back.'">back</a>';
		try
		{
		    // Set login credentials
		    $credentials = array(
		        'email'    => Input::get('user'),
		        'password' => Input::get('pwd'),
		    );

		    // Try to authenticate the user
		    $user = Sentry::authenticate($credentials, false);
		    return Redirect::to('shoes/main');
		}
		catch (Cartalyst\Sentry\Users\LoginRequiredException $e)
		{
		    echo 'Login field is required.'.$back;
		}
		catch (Cartalyst\Sentry\Users\PasswordRequiredException $e)
		{
		    echo 'Password field is required.'.$back;
		}
		catch (Cartalyst\Sentry\Users\WrongPasswordException $e)
		{
		    echo 'Wrong password, try again.'.$back;
		}
		catch (Cartalyst\Sentry\Users\UserNotFoundException $e)
		{
		    echo 'User was not found.'.$back;
		}
		catch (Cartalyst\Sentry\Users\UserNotActivatedException $e)
		{
		    echo 'User is not activated.'.$back;
		}

		// The following is only required if throttle is enabled
		catch (Cartalyst\Sentry\Throttling\UserSuspendedException $e)
		{
		    echo 'User is suspended.'.$back;
		}
		catch (Cartalyst\Sentry\Throttling\UserBannedException $e)
		{
		    echo 'User is banned.'.$back;
		}
	}

	public function getMain () {
		if ( ! Sentry::check())
		{
		    return Redirect::to('/');
		}
		else
		{
		    return View::make('shoes.main');
		}
		
	}

	public function getOut () {
		Sentry::logout();
		return Redirect::to('/');
	}

	public function postAddcustomer () {
		$cardid=$_POST['cardid'];
		$name=$_POST['name'];
		$surname=$_POST['surname'];
		$company=$_POST['company'];
		$mobile=$_POST['mobile'];
		$phonenumber=$_POST['phonenumber'];

		$customer=new Customer;
		$customer->cardid=$cardid;
		$customer->name=$name;
		$customer->surname=$surname;
		$customer->company=$company;
		$customer->mobile=$mobile;
		$customer->phonenumber=$phonenumber;
		$customer->save();


		return 1;
	}

	public function postCardid () {
		$cardid=array('cardid'=>$_POST['cardid']);
		Customer::find($_POST['id'])->update($cardid);
		return 1;
		
	}

	public function postCompany () {
		$company=array('company'=>$_POST['company']);
		Customer::find($_POST['id'])->update($company);
		return 1;
	}

	public function postAddphone () {
		if ($_POST['mobile']!='') {
			$phone=array('mobile'=>$_POST['mobile']);
		}
		if ($_POST['phonenumber']!='') {
			$phone=array('phonenumber'=>$_POST['phonenumber']);
		}

		Customer::find($_POST['id'])->update($phone);
		return 1;

		
			
	}

}
