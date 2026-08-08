<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use App\Models\Skill;
use App\Models\Project;
use App\Models\Education;
use App\Models\Message;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    // 1. Profile Data ලබා ගැනීම
    public function getProfile()
    {
        $profile = Profile::first(); // Database එකේ තියෙන පළමු Profile record එක ගන්නවා
        return response()->json([
            'status' => true,
            'data' => $profile
        ], 200);
    }

    // 2. Skills සියල්ල ලබා ගැනීම
    public function getSkills()
    {
        $skills = Skill::all(); // Skills table එකේ තියෙන ඔක්කොම ටික ගන්නවා
        return response()->json([
            'status' => true,
            'data' => $skills
        ], 200);
    }

    // 3. Projects සියල්ල ලබා ගැනීම (අලුත්ම ඒවා මුලට එනසේ)
    public function getProjects()
    {
        $projects = Project::latest()->get(); 
        return response()->json([
            'status' => true,
            'data' => $projects
        ], 200);
    }

    // 4. Education විස්තර ලබා ගැනීම
    public function getEducation()
    {
        $education = Education::all();
        return response()->json([
            'status' => true,
            'data' => $education
        ], 200);
    }

    // 5. Contact Form එකෙන් එන Message එක Database එකට Save කිරීම
    public function sendMessage(Request $request)
    {
        // Inputs validate කිරීම (නම, Email, Message අනිවාර්යයි)
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        // Message එක DB එකේ save කිරීම
        $message = Message::create($validated);

        return response()->json([
            'status' => true,
            'message' => 'Your message has been sent successfully!',
            'data' => $message
        ], 201);
    }
}