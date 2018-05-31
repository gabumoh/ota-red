<?php

namespace App\Http\Controllers;
use App\Review;
use Illuminate\Http\Request;
class ReviewController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function showAllReviews()
    {
       $reviews = Review::latest()->take(10)->get();
        $reviews = [
            'data' => [
                'review_data'=>[
                    'reviews'=>$reviews
                ]
            ]
        ];

       return response()->json($reviews, 200);
    }


    public function showOneReview(Request $request, $id)
    {
            $review = Review::findOrFail($id);

            
            if ($review) {
                $review = [
                    'data' => [
                        'review_data'=>[
                            'reviews'=>$review
                        ]
                    ]
                ];
        
                return response()->json($review, 200);
            }else{
                return response()->json('Not Found', 400);            
            }
    }

    public function update(Request $request, $id)
    {
        $review = Review::findOrFail($id);

        $review->update($request->all());

        return response()->json($review,200);
    }

    public function create(Request $request)
    {
        $reviews = count(Review::all());
        if ($reviews >= 10) {

            return response()->json('Maximum OTA Reviews cannot be exceeded', 400);
            exit();
        }
        $res = Review::create($request->all());

        return response()->json($res, 201);
    }

    public function delete(Request $request, $id)
    {
        $review = Review::findOrFail($id);
        if ($review) {
            $review->delete();

            return response()->json('Deleted successfully', 200);
        }
        else{
            return response()->json('Review does not exist', 400);
        }
    }
    
    public function response(Request $request)
    {
        $reponse = ReviewResponse::create([
            $request->all()
        ]);

        if ($response) {
            return response()->json(['status' => 'success'], 201);
        }
        else {
            return response()->json(['status' => 'error'], 500);
        }
    }
}
