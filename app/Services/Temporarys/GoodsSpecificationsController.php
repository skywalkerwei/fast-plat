<?php

namespace App\Services\Temporarys;

use Illuminate\Http\Request;

use App\Http\Requests;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Http\Requests\GoodsSpecificationCreateRequest;
use App\Http\Requests\GoodsSpecificationUpdateRequest;
use App\Repository\Interfaces\GoodsSpecificationRepository;
use App\Http\Requests\GoodsSpecificationValidator;

/**
 * Class GoodsSpecificationsController.
 *
 * @package namespace App\Services\Temporarys;
 */
class GoodsSpecificationsController extends Controller
{
    /**
     * @var GoodsSpecificationRepository
     */
    protected $repository;

    /**
     * @var GoodsSpecificationValidator
     */
    protected $validator;

    /**
     * GoodsSpecificationsController constructor.
     *
     * @param GoodsSpecificationRepository $repository
     * @param GoodsSpecificationValidator $validator
     */
    public function __construct(GoodsSpecificationRepository $repository, GoodsSpecificationValidator $validator)
    {
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $goodsSpecifications = $this->repository->all();

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $goodsSpecifications,
            ]);
        }

        return view('goodsSpecifications.index', compact('goodsSpecifications'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  GoodsSpecificationCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function store(GoodsSpecificationCreateRequest $request)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_CREATE);

            $goodsSpecification = $this->repository->create($request->all());

            $response = [
                'message' => 'GoodsSpecification created.',
                'data'    => $goodsSpecification->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $goodsSpecification = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $goodsSpecification,
            ]);
        }

        return view('goodsSpecifications.show', compact('goodsSpecification'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $goodsSpecification = $this->repository->find($id);

        return view('goodsSpecifications.edit', compact('goodsSpecification'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  GoodsSpecificationUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(GoodsSpecificationUpdateRequest $request, $id)
    {
        try {

            $this->validator->with($request->all())->passesOrFail(ValidatorInterface::RULE_UPDATE);

            $goodsSpecification = $this->repository->update($request->all(), $id);

            $response = [
                'message' => 'GoodsSpecification updated.',
                'data'    => $goodsSpecification->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            return redirect()->back()->with('message', $response['message']);
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'GoodsSpecification deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'GoodsSpecification deleted.');
    }
}
