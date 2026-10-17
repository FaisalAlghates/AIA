<?php

use App\Models\Service;
use App\Models\TeamMember;
use App\Models\User;

test('guests are sent to the login page from every admin page', function () {
    foreach (['/admin', '/admin/services', '/admin/services/create', '/admin/team-members', '/admin/team-members/create'] as $path) {
        $this->get($path)->assertRedirect('/login');
    }
});

test('a signed-in user sees the admin home and both lists', function () {
    $this->actingAs(User::factory()->create());

    $this->get('/admin')->assertOk()->assertSee('Admin');
    $this->get('/admin/services')->assertOk();
    $this->get('/admin/services/create')->assertOk();
    $this->get('/admin/team-members')->assertOk();
    $this->get('/admin/team-members/create')->assertOk();
});

test('services can be created, edited and deleted', function () {
    $this->actingAs(User::factory()->create());

    $this->post('/admin/services', [
        'title' => 'Workflow audit',
        'description' => 'We map your processes.',
        'color_from' => '#3B82F6',
        'color_to' => '#8B5CF6',
        'features' => "Interviews\nProcess map",
        'is_active' => '1',
    ])->assertRedirect('/admin/services');

    $service = Service::where('title', 'Workflow audit')->firstOrFail();
    expect($service->slug)->toBe('workflow-audit')
        ->and($service->features)->toBe(['Interviews', 'Process map']);

    $this->get("/admin/services/{$service->id}/edit")->assertOk()->assertSee('Workflow audit');

    $this->put("/admin/services/{$service->id}", [
        'title' => 'Workflow audit plus',
        'description' => 'Updated.',
        'color_from' => '#3B82F6',
        'color_to' => '#8B5CF6',
    ])->assertRedirect('/admin/services');
    expect($service->fresh()->title)->toBe('Workflow audit plus');

    $this->delete("/admin/services/{$service->id}")->assertRedirect('/admin/services');
    expect(Service::count())->toBe(0);
});

test('team members can be added, edited and removed', function () {
    $this->actingAs(User::factory()->create());

    $this->post('/admin/team-members', [
        'name' => 'Sara Ali',
        'position' => 'Engineer',
        'bio' => 'Builds automations.',
        'color_from' => '#3B82F6',
        'color_to' => '#8B5CF6',
        'skills' => 'PHP, Laravel',
    ])->assertRedirect('/admin/team-members');

    $member = TeamMember::where('name', 'Sara Ali')->firstOrFail();
    expect($member->initials)->toBe('SA')->and($member->skills)->toBe(['PHP', 'Laravel']);

    $this->get("/admin/team-members/{$member->id}/edit")->assertOk();
    $this->put("/admin/team-members/{$member->id}", [
        'name' => 'Sara Ali',
        'position' => 'Lead engineer',
        'bio' => 'Builds automations.',
        'color_from' => '#3B82F6',
        'color_to' => '#8B5CF6',
    ])->assertRedirect('/admin/team-members');
    expect($member->fresh()->position)->toBe('Lead engineer');

    $this->delete("/admin/team-members/{$member->id}")->assertRedirect('/admin/team-members');
    expect(TeamMember::count())->toBe(0);
});
