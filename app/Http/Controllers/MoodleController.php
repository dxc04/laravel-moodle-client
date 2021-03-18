<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Zhiru\LaravelMoodle\Clients\Adapters\RestClient;
use Zhiru\LaravelMoodle\Connection;

class MoodleController extends Controller
{

    private $client;

    /**
     * List moodle users.
     *
     * @return \Illuminate\View\View
     */
    public function users()
    {
        $users = $this->restClient()->sendRequest('local_usercourses_list_users');
        return view('moodle.users', [
            'users' => $users
        ]);
    }

    /**
     * List moodle courses.
     *
     * @return \Illuminate\View\View
     */
    public function courses()
    {
        $courses = $this->restClient()->sendRequest('local_usercourses_list_courses');
        return view('moodle.courses', [
            'courses' => $courses
        ]);
    }

    /**
     * List moodle users courses with their grades.
     *
     * @return \Illuminate\View\View
     */
    public function usersCoursesWithGrades()
    {
        $users_courses = $this->restClient()->sendRequest('local_usercourses_list_users_courses');
        return view('moodle.users_courses', [
            'users_courses' => $users_courses
        ]);
    }

    private function restClient()
    {
        $config = config('moodle');
        return new RestClient($config['url'], $config['token']);
    }
}
