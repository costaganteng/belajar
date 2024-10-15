<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        $data = $this->getProfileData();

        return view('profile', compact('data'));
    }

    private function getProfileData()
    {
        return [
            'name' => 'Ardianus Caesar Emanual Ruicosta Duu',
            'title' => 'Web Developer',
            'bio' => 'Selamat datang di halaman web pribadi saya! Saya adalah seorang web developer dengan pengalaman dalam menciptakan aplikasi web yang responsif dan estetik.',
            'skills' => $this->getSkills(),
            'portfolio' => $this->getPortfolio(),
            'location' => 'Kalimantan Timur, Kutai Timur, Sangatta Utara',
            'email' => 'ardianuscaesar@gmail.com'
        ];
    }

    private function getSkills()
    {
        return [
            ['name' => 'HTML, CSS, JavaScript', 'level' => 90],
            ['name' => 'React', 'level' => 75],
            ['name' => 'Laravel', 'level' => 80],
            ['name' => 'Desain UI/UX', 'level' => 85]
        ];
    }

    private function getPortfolio()
    {
        return [
            [
                'title' => 'Project 1',
                'description' => 'Deskripsi singkat project 1.',
                'video_link' => 'video_project1.mp4'
            ],
            [
                'title' => 'Project 2',
                'description' => 'Deskripsi singkat project 2.',
                'video_link' => 'video_project2.mp4'
            ],
            [
                'title' => 'Project 3',
                'description' => 'Deskripsi singkat project 3.',
                'video_link' => 'video_project3.mp4'
            ]
        ];
    }
}
