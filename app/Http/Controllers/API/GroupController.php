<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseApiController;
use App\Models\Group;

use App\Http\Resources\Group as GroupResource;
use Validator;

class GroupController extends BaseApiController {
	public function index() {
		$groups = Group::all();
	
		return $this->sendResponse(GroupResource::collection($groups), 'Groups retrieved successfully');
	}

	public function store(Request $request) {
		$input = $request->all();

		$validator = Validator::make($input, [
			'name' => 'required',
			]);

		if ($validator->fails()) {
			return $this->sendError('Validation error', $validator->errors());
		}

		$group = Group::create($input);

		return $this-> sendResponse(new GroupResource($group), 'Group created successfully');
	}

	public function show($id) {
		$group = Group::find($id);

		if (is_null($group)) {
			return $this->sendError('Group not found');
		} 

		return $this-> sendResponse(new GroupResource($group), 'Group retrieved successfully');

	}

	public function update(Request $request, Group $group) {
		$input = $request->all();

		$validator = Validator::make($input, [
			'name' => 'required',
		]);

		if ($validator->fails()) {
			return $this->sendError('Validation error', $validator->errors());
		}

		$group->name = $input['name'];
		
		$group->save();

		return $this-> sendResponse(new GroupResource($group), 'Group updated successfully');

	}

	public function destroy(Group $group) {
		$group->delete();
		return $this-> sendResponse([], 'Group deleted successfully');

	}
}