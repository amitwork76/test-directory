@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" aria-label="{{ __('Register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('EMAIL') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('MOBILE') }}</label>

                            <div class="row col-md-6">
                                <div class="col-md-5">
                                    <select id="countrycode" name="countrycode" class="form-control"><option class="form-control" value="376">AD (+376)</option><option class="form-control" value="971">AE (+971)</option><option class="form-control" value="93">AF (+93)</option><option class="form-control" value="1268">AG (+1268)</option><option class="form-control" value="1264">AI (+1264)</option><option class="form-control" value="355">AL (+355)</option><option class="form-control" value="374">AM (+374)</option><option class="form-control" value="599">AN (+599)</option><option class="form-control" value="244">AO (+244)</option><option class="form-control" value="672">AQ (+672)</option><option class="form-control" value="54">AR (+54)</option><option class="form-control" value="1684">AS (+1684)</option><option class="form-control" value="43">AT (+43)</option><option class="form-control" value="61">AU (+61)</option><option class="form-control" value="297">AW (+297)</option><option class="form-control" value="994">AZ (+994)</option><option class="form-control" value="387">BA (+387)</option><option class="form-control" value="1246">BB (+1246)</option><option class="form-control" value="880">BD (+880)</option><option class="form-control" value="32">BE (+32)</option><option class="form-control" value="226">BF (+226)</option><option class="form-control" value="359">BG (+359)</option><option class="form-control" value="973">BH (+973)</option><option class="form-control" value="257">BI (+257)</option><option class="form-control" value="229">BJ (+229)</option><option class="form-control" value="590">BL (+590)</option><option class="form-control" value="1441">BM (+1441)</option><option class="form-control" value="673">BN (+673)</option><option class="form-control" value="591">BO (+591)</option><option class="form-control" value="55">BR (+55)</option><option class="form-control" value="1242">BS (+1242)</option><option class="form-control" value="975">BT (+975)</option><option class="form-control" value="267">BW (+267)</option><option class="form-control" value="375">BY (+375)</option><option class="form-control" value="501">BZ (+501)</option><option class="form-control" value="1">CA (+1)</option><option class="form-control" value="61">CC (+61)</option><option class="form-control" value="243">CD (+243)</option><option class="form-control" value="236">CF (+236)</option><option class="form-control" value="242">CG (+242)</option><option class="form-control" value="41">CH (+41)</option><option class="form-control" value="225">CI (+225)</option><option class="form-control" value="682">CK (+682)</option><option class="form-control" value="56">CL (+56)</option><option class="form-control" value="237">CM (+237)</option><option class="form-control" value="86">CN (+86)</option><option class="form-control" value="57">CO (+57)</option><option class="form-control" value="506">CR (+506)</option><option class="form-control" value="53">CU (+53)</option><option class="form-control" value="238">CV (+238)</option><option class="form-control" value="61">CX (+61)</option><option class="form-control" value="357">CY (+357)</option><option class="form-control" value="420">CZ (+420)</option><option class="form-control" value="49">DE (+49)</option><option class="form-control" value="253">DJ (+253)</option><option class="form-control" value="45">DK (+45)</option><option class="form-control" value="1767">DM (+1767)</option><option class="form-control" value="1809">DO (+1809)</option><option class="form-control" value="213">DZ (+213)</option><option class="form-control" value="593">EC (+593)</option><option class="form-control" value="372">EE (+372)</option><option class="form-control" value="20">EG (+20)</option><option class="form-control" value="291">ER (+291)</option><option class="form-control" value="34">ES (+34)</option><option class="form-control" value="251">ET (+251)</option><option class="form-control" value="358">FI (+358)</option><option class="form-control" value="679">FJ (+679)</option><option class="form-control" value="500">FK (+500)</option><option class="form-control" value="691">FM (+691)</option><option class="form-control" value="298">FO (+298)</option><option class="form-control" value="33">FR (+33)</option><option class="form-control" value="241">GA (+241)</option><option class="form-control" value="44" selected="">GB (+44)</option><option class="form-control" value="1473">GD (+1473)</option><option class="form-control" value="995">GE (+995)</option><option class="form-control" value="233">GH (+233)</option><option class="form-control" value="350">GI (+350)</option><option class="form-control" value="299">GL (+299)</option><option class="form-control" value="220">GM (+220)</option><option class="form-control" value="224">GN (+224)</option><option class="form-control" value="240">GQ (+240)</option><option class="form-control" value="30">GR (+30)</option><option class="form-control" value="502">GT (+502)</option><option class="form-control" value="1671">GU (+1671)</option><option class="form-control" value="245">GW (+245)</option><option class="form-control" value="592">GY (+592)</option><option class="form-control" value="852">HK (+852)</option><option class="form-control" value="504">HN (+504)</option><option class="form-control" value="385">HR (+385)</option><option class="form-control" value="509">HT (+509)</option><option class="form-control" value="36">HU (+36)</option><option class="form-control" value="62">ID (+62)</option><option class="form-control" value="353">IE (+353)</option><option class="form-control" value="972">IL (+972)</option><option class="form-control" value="44">IM (+44)</option><option class="form-control" value="91">IN (+91)</option><option class="form-control" value="964">IQ (+964)</option><option class="form-control" value="98">IR (+98)</option><option class="form-control" value="354">IS (+354)</option><option class="form-control" value="39">IT (+39)</option><option class="form-control" value="1876">JM (+1876)</option><option class="form-control" value="962">JO (+962)</option><option class="form-control" value="81">JP (+81)</option><option class="form-control" value="254">KE (+254)</option><option class="form-control" value="996">KG (+996)</option><option class="form-control" value="855">KH (+855)</option><option class="form-control" value="686">KI (+686)</option><option class="form-control" value="269">KM (+269)</option><option class="form-control" value="1869">KN (+1869)</option><option class="form-control" value="850">KP (+850)</option><option class="form-control" value="82">KR (+82)</option><option class="form-control" value="965">KW (+965)</option><option class="form-control" value="1345">KY (+1345)</option><option class="form-control" value="7">KZ (+7)</option><option class="form-control" value="856">LA (+856)</option><option class="form-control" value="961">LB (+961)</option><option class="form-control" value="1758">LC (+1758)</option><option class="form-control" value="423">LI (+423)</option><option class="form-control" value="94">LK (+94)</option><option class="form-control" value="231">LR (+231)</option><option class="form-control" value="266">LS (+266)</option><option class="form-control" value="370">LT (+370)</option><option class="form-control" value="352">LU (+352)</option><option class="form-control" value="371">LV (+371)</option><option class="form-control" value="218">LY (+218)</option><option class="form-control" value="212">MA (+212)</option><option class="form-control" value="377">MC (+377)</option><option class="form-control" value="373">MD (+373)</option><option class="form-control" value="382">ME (+382)</option><option class="form-control" value="1599">MF (+1599)</option><option class="form-control" value="261">MG (+261)</option><option class="form-control" value="692">MH (+692)</option><option class="form-control" value="389">MK (+389)</option><option class="form-control" value="223">ML (+223)</option><option class="form-control" value="95">MM (+95)</option><option class="form-control" value="976">MN (+976)</option><option class="form-control" value="853">MO (+853)</option><option class="form-control" value="1670">MP (+1670)</option><option class="form-control" value="222">MR (+222)</option><option class="form-control" value="1664">MS (+1664)</option><option class="form-control" value="356">MT (+356)</option><option class="form-control" value="230">MU (+230)</option><option class="form-control" value="960">MV (+960)</option><option class="form-control" value="265">MW (+265)</option><option class="form-control" value="52">MX (+52)</option><option class="form-control" value="60">MY (+60)</option><option class="form-control" value="258">MZ (+258)</option><option class="form-control" value="264">NA (+264)</option><option class="form-control" value="687">NC (+687)</option><option class="form-control" value="227">NE (+227)</option><option class="form-control" value="234">NG (+234)</option><option class="form-control" value="505">NI (+505)</option><option class="form-control" value="31">NL (+31)</option><option class="form-control" value="47">NO (+47)</option><option class="form-control" value="977">NP (+977)</option><option class="form-control" value="674">NR (+674)</option><option class="form-control" value="683">NU (+683)</option><option class="form-control" value="64">NZ (+64)</option><option class="form-control" value="968">OM (+968)</option><option class="form-control" value="507">PA (+507)</option><option class="form-control" value="51">PE (+51)</option><option class="form-control" value="689">PF (+689)</option><option class="form-control" value="675">PG (+675)</option><option class="form-control" value="63">PH (+63)</option><option class="form-control" value="92">PK (+92)</option><option class="form-control" value="48">PL (+48)</option><option class="form-control" value="508">PM (+508)</option><option class="form-control" value="870">PN (+870)</option><option class="form-control" value="1">PR (+1)</option><option class="form-control" value="351">PT (+351)</option><option class="form-control" value="680">PW (+680)</option><option class="form-control" value="595">PY (+595)</option><option class="form-control" value="974">QA (+974)</option><option class="form-control" value="40">RO (+40)</option><option class="form-control" value="381">RS (+381)</option><option class="form-control" value="7">RU (+7)</option><option class="form-control" value="250">RW (+250)</option><option class="form-control" value="966">SA (+966)</option><option class="form-control" value="677">SB (+677)</option><option class="form-control" value="248">SC (+248)</option><option class="form-control" value="249">SD (+249)</option><option class="form-control" value="46">SE (+46)</option><option class="form-control" value="65">SG (+65)</option><option class="form-control" value="290">SH (+290)</option><option class="form-control" value="386">SI (+386)</option><option class="form-control" value="421">SK (+421)</option><option class="form-control" value="232">SL (+232)</option><option class="form-control" value="378">SM (+378)</option><option class="form-control" value="221">SN (+221)</option><option class="form-control" value="252">SO (+252)</option><option class="form-control" value="597">SR (+597)</option><option class="form-control" value="239">ST (+239)</option><option class="form-control" value="503">SV (+503)</option><option class="form-control" value="963">SY (+963)</option><option class="form-control" value="268">SZ (+268)</option><option class="form-control" value="1649">TC (+1649)</option><option class="form-control" value="235">TD (+235)</option><option class="form-control" value="228">TG (+228)</option><option class="form-control" value="66">TH (+66)</option><option class="form-control" value="992">TJ (+992)</option><option class="form-control" value="690">TK (+690)</option><option class="form-control" value="670">TL (+670)</option><option class="form-control" value="993">TM (+993)</option><option class="form-control" value="216">TN (+216)</option><option class="form-control" value="676">TO (+676)</option><option class="form-control" value="90">TR (+90)</option><option class="form-control" value="1868">TT (+1868)</option><option class="form-control" value="688">TV (+688)</option><option class="form-control" value="886">TW (+886)</option><option class="form-control" value="255">TZ (+255)</option><option class="form-control" value="380">UA (+380)</option><option class="form-control" value="256">UG (+256)</option><option class="form-control" value="1">US (+1)</option><option class="form-control" value="598">UY (+598)</option><option class="form-control" value="998">UZ (+998)</option><option class="form-control" value="39">VA (+39)</option><option class="form-control" value="1784">VC (+1784)</option><option class="form-control" value="58">VE (+58)</option><option class="form-control" value="1284">VG (+1284)</option><option class="form-control" value="1340">VI (+1340)</option><option class="form-control" value="84">VN (+84)</option><option class="form-control" value="678">VU (+678)</option><option class="form-control" value="681">WF (+681)</option><option class="form-control" value="685">WS (+685)</option><option class="form-control" value="381">XK (+381)</option><option class="form-control" value="967">YE (+967)</option><option class="form-control" value="262">YT (+262)</option><option class="form-control" value="27">ZA (+27)</option><option class="form-control" value="260">ZM (+260)</option><option class="form-control" value="263">ZW (+263)</option></select>
                            </div> 
                            <div class="col-md-7"> 
                                <input id="mobile" type="text" class="form-control{{ $errors->has('mobile') ? ' is-invalid' : '' }}" name="mobile" value="{{ old('mobile') }}" pattern="[789][0-9]{9}">

                                @if ($errors->has('mobile'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('mobile') }}</strong>
                                    </span>
                                @endif
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="account_number" class="col-md-4 col-form-label text-md-right">{{ __('ACCOUNT NUMBER') }}</label>

                            <div class="col-md-6">
                                <input id="account_number" type="account_number" class="form-control{{ $errors->has('account_number') ? ' is-invalid' : '' }}"  value="{{ old('account_number') }}" name="account_number" required>

                                @if ($errors->has('account_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('account_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
