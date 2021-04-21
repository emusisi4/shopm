<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use App\Mainmenucomponent;
use App\Submheader;
use App\Expense;
use App\Expensescategory;
use App\Madeexpense;
use App\Productsale;

class ProfitreportController extends Controller
{
   
    
    public function __construct()
    {
       $this->middleware('auth:api');
      //  $this->authorize('isAdmin'); 
    }

    public function index()
    {
      $userid =  auth('api')->user()->id;
     $userbranch =  auth('api')->user()->branch;
    $userrole =  auth('api')->user()->type;
     //   if($userrole = 1)

     $startdat = DB::table('expensereporttoviews')->where('ucret', $userid)->value('startdate');
     $enddate = DB::table('expensereporttoviews')->where('ucret', $userid)->value('enddate');
     $branchto = DB::table('expensereporttoviews')->where('ucret', $userid)->value('branch');
     $reporyttype = DB::table('expensereporttoviews')->where('ucret', $userid)->value('reporttype');



       // return Student::all();
     //  return   Submheader::with(['maincomponentSubmenus'])->latest('id')
       // return   MainmenuList::latest('id')
     //    ->where('del', 0)
         //->paginate(15)
     //    ->get();

     if($reporyttype == "profitreportbybranch" and $branchto != '900')
      {
      //productName
        return   Productsale::with(['productName'])->latest('datesold')
        // return   Productsale::latest('datesold')
      // return   Madeexpense::latest('id')
       // ->where('del', 0)
        ->where('branch', $branchto)
        ->whereBetween('datesold', [$startdat, $enddate])
    /// ->where('branchto', $branchto)
       ->paginate(50);
      }


      if($reporyttype == "profitreportbybranch" and $branchto = '900')
      {
      
        //  return   Productsale::with(['branchName'])->latest('datesold')
        return   Productsale::with(['productName'])->latest('datesold')
        // return   Productsale::latest('datesold')
      // return   Madeexpense::latest('id')
       // ->where('del', 0)
      //  ->where('branch', $branchto)
        ->whereBetween('datesold', [$startdat, $enddate])
    /// ->where('branchto', $branchto)
       ->paginate(50);
      }



//       if($reporyttype == "profitreportbybranch" and $branchto != '900')
//       {
      
//          return   Madeexpense::with(['branchName','expenseName'])->latest('datesold')
//       // return   Madeexpense::latest('id')
//        // ->where('del', 0)
//         ->where('branch', $branchto)
//         ->whereBetween('datesold', [$startdat, $enddate])
//     /// ->where('branchto', $branchto)
//        ->paginate(50);
//       }


//       if($reporyttype == "expreportbybranch" and $branchto = '900')
//       {
      
//          return   Madeexpense::with(['branchName','expenseName'])->latest('datesold')
//       // return   Madeexpense::latest('id')
//        // ->where('del', 0)
//       //  ->where('branch', $branchto)
//         ->whereBetween('datesold', [$startdat, $enddate])
//     /// ->where('branchto', $branchto)
//        ->paginate(50);
//       }
//    //   if($userrole != '101')
//       {
      
//      //    return   Madeexpense::with(['branchName','expenseName'])->latest('id')
//       // return   Madeexpense::latest('id')
//        // ->where('del', 0)
//        // ->where('branch', $userbranch)
//      ///  ->paginate(13);
//       }

       //  return Submheader::latest()
         //  -> where('ucret', $userid)
           

//       return   Madeexpense::get()->count();








       // {
      // return Submheader::latest()
      //  -> where('ucret', $userid)
    //    ->paginate(15);
      //  }

      
    }

   
    
    public function store(Request $request)
    {
        //
       // return ['message' => 'i have data'];
//// Getting the category
  
//$startdat = DB::table('incomereporttoviews')->where('ucret', $userid)->value('startdate');



       $this->validate($request,[
        'expense'   => 'required | String |max:191',
        'description'   => 'required',
        'amount'  => 'required',
        'datesold'  => 'required',
        'branch'  => 'required',
       // 'expensetype'   => 'sometimes |min:0'
     ]);


     $userid =  auth('api')->user()->id;
     //$id1  = Expense::latest('id')->where('del', 0)->orderBy('id', 'Desc')->limit(1)->value('expenseno');
     //$hid = $id1+1;
     $exp = $request['expense'];
     $expcat = \DB::table('expenses')->where('expenseno', $exp )->value('expensecategory');
//$expcat =  Expense::where('id', $exp)->value('expensecategory');
     $exptyo = \DB::table('expenses')->where('expenseno', $exp)->value('expensetype');
     
  //       $dats = $id;
       return Madeexpense::Create([
      'expense' => $request['expense'],
     //'expenseno' => $hid,
      'description' => $request['description'],
      'amount' => $request['amount'],
      'datesold' => $request['datesold'],
      'branch' => $request['branch'],
      'category' => $expcat,
      'exptype' => $exptyo,
      'ucret' => $userid,
    
  ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }
   
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $user = Madeexpense::findOrfail($id);

$this->validate($request,[
    'expense'   => 'required | String |max:191',
    'description'   => 'required',
    'amount'  => 'required',
    'datesold'  => 'required',
    'branch'  => 'required'
]);

 
     
$user->update($request->all());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
     //   $this->authorize('isAdmin'); 

        $user = Madeexpense::findOrFail($id);
        $user->delete();
       // return['message' => 'user deleted'];

    }
}
