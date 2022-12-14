<?php


namespace App\Http\Controllers\Competitions\CompetitionMember;


use App\Http\Controllers\Controller;
use App\Domain\Competitions\CompetitionMember\Model\CompetitionMember;
use App\Domain\Competitions\CompetitionMember\Actions\StoreCompetitionMemberAction;
use App\Domain\Competitions\CompetitionMember\Actions\DestroyCompetitionMemberAction;
use App\Domain\Competitions\CompetitionMember\Actions\UpdateCompetitionMemberAction;
use App\Domain\Competitions\CompetitionMember\DTO\CompetitionMemberDTO;
use App\Http\Requests\Competitions\CompetitionMember\StoreCompetitionMemberRequest;
use App\Http\Requests\Competitions\CompetitionMember\UpdateCompetitionMemberRequest;
use App\Http\ViewModels\Competitions\CompetitionMember\GetCompetitionMemberVM;
use App\Http\ViewModels\Competitions\CompetitionMember\GetAllCompetitionMembersVM;

class CompetitionMemberController extends Controller
{

    public function index(){

        return response()->json(success((new GetAllCompetitionMembersVM())->toArray()));
    }

    public function show(CompetitionMember $competitionMember){

        return response()->json(success((new GetCompetitionMemberVM($competitionMember))->toArray()));
    }

    public function store(StoreCompetitionMemberRequest $request){

        $data = $request->validated() ;

        $competitionMemberDTO = CompetitionMemberDTO::fromRequest($data);

        $competitionMember = StoreCompetitionMemberAction::execute($competitionMemberDTO);

        return response()->json(success((new GetCompetitionMemberVM($competitionMember))->toArray()));
    }

    public function update(CompetitionMember $competitionMember, UpdateCompetitionMemberRequest $request){

        $data = $request->validated() ;

        $competitionMemberDTO = CompetitionMemberDTO::fromRequest($data);

        $competitionMember = UpdateCompetitionMemberAction::execute($competitionMember, $competitionMemberDTO);

        return response()->json(success((new GetCompetitionMemberVM($competitionMember))->toArray()));
    }

    public function destroy(CompetitionMember $competitionMember){

        return response()->json(success(DestroyCompetitionMemberAction::execute($competitionMember)));
    }

}
