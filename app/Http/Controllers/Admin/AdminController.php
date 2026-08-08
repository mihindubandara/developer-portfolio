<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Skill;
use App\Models\Message;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    // 1. Dashboard Main View
    public function index()
    {
        $projectCount = Project::count();
        $skillCount = Skill::count();
        $messageCount = Message::count();
        $messages = Message::latest()->take(5)->get();

        return view('admin.dashboard', compact('projectCount', 'skillCount', 'messageCount', 'messages'));
    }

    // 2. Manage Projects
    public function projects()
    {
        $projects = Project::latest()->get();
        return view('admin.projects', compact('projects'));
    }

    public function storeProject(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'technologies' => 'required|string',
            'github_link' => 'nullable|url',
            'demo_link' => 'nullable|url',
        ]);

        Project::create($request->all());

        return redirect()->back()->with('success', 'Project added successfully!');
    }

    public function deleteProject($id)
    {
        Project::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Project deleted successfully!');
    }

    // 3. Manage Messages
    public function messages()
    {
        $messages = Message::latest()->get();
        return view('admin.messages', compact('messages'));
    }

    public function deleteMessage($id)
    {
        Message::findOrFail($id)->delete();
        return redirect()->back()->with('success', 'Message deleted successfully!');
    }
}