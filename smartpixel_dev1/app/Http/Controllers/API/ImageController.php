<?php
   
namespace App\Http\Controllers\API;
   
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Image;
use Validator;
use App\Http\Resources\Image as ImageResource;
   
class ImageController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Responses
     */
    public function index()
    {
        $image = Image::all();
    
        return $this->sendResponse(ImageResource::collection($image), 'Image retrieved successfully.');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'url' => 'required',
            'user_id'=> 'required',
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'category' => 'required',
            'tag' => 'required',
            'price' => 'required',
            'rating' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $image = Image::create($input);
   
        return $this->sendResponse(new ImageResource($image), 'Asset uploaded successfully.');
    } 
   
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Image::find($id);
  
        if (is_null($image)) {
            return $this->sendError('Image not found.');
        }
   
        return $this->sendResponse(new ImageResource($image), 'Image retrieved successfully.');
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $input = $request->all();
   
        $validator = Validator::make($input, [
            'title' => 'required',
            'location' => 'required',
            'description' => 'required',
            'category' => 'required',
            'tag' => 'required',
            'price' => 'required',
            'rating' => 'required'
        ]);
   
        if($validator->fails()){
            return $this->sendError('Validation Error.', $validator->errors());       
        }
   
        $image->title = $input['title'];
        $image->location = $input['location'];
        $image->description = $input['description'];
        $image->category = $input['category'];
        $image->tag = $input['tag'];
        $image->price = $input['price'];
        $image->rating = $input['rating'];
        $image->save();
   
        return $this->sendResponse(new ImageResource($image), 'Image updated successfully.');
    }
	
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int $id
	 * @return \Illuminate\Http\Response
	 * @throws \Exception
	 */
    public function destroy(Image $image)
    {
        $image->delete();
   
        return $this->sendResponse([], 'Image deleted successfully.');
    }

    public function search(Request $request) {
        $data = Image::select("title")
                ->where("title", "LIKE", "%{$request->query}%")
                ->get();

                return response() -> json($data);
    }
}