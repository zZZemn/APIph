<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index()
    {
        $abouts = [
            'Welcome to APIph – your go-to free API for comprehensive Philippine address data. Designed with developers in mind, APIph offers a wealth of information, ranging from regions to barangays. This API allowing developers to save valuable time and resources for their projects.',
            'APIph is more than just a tool; it\'s a commitment to providing a seamless experience for developers working on projects that require accurate and up-to-date Philippine address data.',
            '',
            '',
            'Key Features of APIph:',
            '- Extensive Data: APIph boasts a comprehensive database of Philippine addresses, covering regions, provinces, cities, municipalities, and barangays, ensuring that developers have access to a wealth of information for their applications.',
            '- User-Friendly: With a developer-friendly interface and clear documentation, APIph is designed to be easy to integrate into any project. Spend less time navigating complex APIs and more time building amazing applications.',
            '',
            '',
            'About the Developer:',
            'Emmanuel Ugaban is a seasoned developer with a passion for creating solutions that empower others. You can learn more about Emmanuel and explore his other projects on his personal website: <a href="https://emmanuelugaban.vercel.app" target="blank_">https://emmanuelugaban.vercel.app</a>.',
            '',
            '',
            'Built with Laravel 10:',
            'APIph is powered by the latest version of the Laravel framework, ensuring robustness, security, and scalability. Laravel 10 provides a solid foundation for APIph, allowing developers to build upon a framework known for its elegance and ease of use.',
            'Start exploring the possibilities with APIph today. Whether you are working on a small personal project or a large-scale application, APIph is here to simplify your development process. Embrace the power of accurate Philippine address data with APIph – where innovation meets efficiency.'
        ];
        return view('about', ['abouts' => $abouts]);
    }
}
