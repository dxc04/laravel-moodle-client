@extends('layouts.app')

@section('title', 'Users Courses List')

@section('content')

<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                ID
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Usermame
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                First Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Last Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Courses
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Grades
              </th>
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach ($users_courses as $user)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $user['id'] }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $user['username'] }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $user['firstname'] }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $user['lastname'] }}
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                {{ $user['email'] }}
              </td>
              <td class="px-2 py-4 whitespace-nowrap text-sm text-gray-500">
                <div class='my-3 flex flex-wrap -m-1'>
                  @foreach($user['enrolledcourses'] as $course)
                  <span class="m-1 bg-indigo-200 rounded px-2 text-sm leading-loose" >{{ $course['shortname'] }}</span>
                  @endforeach
                </div>
              </td>
              <td class="px-2 py-2 whitespace-nowrap text-sm text-gray-500">
                <div class="flex justify-center">
                  <ul class="">
                  @foreach($user['grades'] as $grade)
                    <li class="p-1 hover:bg-gray-50 cursor-pointer">{{ $grade['shortname'] }}
                      <span class="m-1 bg-blue-200 hover:bg-gray-300 rounded-full px-2 text-sm leading-loose" >
                        {{ $grade['grade'] }}
                      </span>
                    </li>
                  @endforeach
                  </ul>
                </div>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
