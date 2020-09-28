@php
    echo '<div id="comment0"></div>';
@endphp
@foreach ($array as $key => $value)
    @php  echo '<div id="comment0"></div>
                <div style="margin-left:'.($value['nesting']*30).'px;" ><br>
                    <div class="cool" style=" font-style: italic;">'.$value['author'].'</div>&nbsp
                    <div class="cool" style="font-style: italic; color: #888988; ">('.$value["data"].')</div><br>
                    <div class="cool">'.$value['text'].'</div><br>
                </div>';

         if (Auth::check()) {
              echo'<div class="accordion" id="accordionExample">
                            <div style="background-color: white; border: white; margin-left:'.($value['nesting']*30).'px" class="card">
                                <div style="background-color: white; border: white; margin-left:'.($value['nesting']*30).'px" class="card-header" id="heading' . $value['id'] . ' ?>">
                                    <h2 class="mb-0">
                                        <button  style="color: #888988;margin-left:'.-($value['nesting']*30).'px" class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" aria-expanded="false" data-target="#collapse_' . $value['id'] . '" aria-controls="collapse_' . $value['id'] . '">
                                            Ответить
                                        </button>
                                    </h2>
                                </div>
                                <div id="collapse_' . $value['id'] . '" class="collapse" aria-labelledby="heading' . $value['id'] . '" data-parent="#accordionExample">
                                   <div class="card-body">
                                       <form>';
    @endphp
        {{csrf_field()}}
    @php
                                     echo ' <textarea required  name="text" id="text_id' . $value['id'] . '" class="form-control"></textarea></br>
                                            <input type="hidden" id="parent_id' . $value['id'] . '" class="parent_id" name="parent_id" value="' . $value['id'] . '">
                                            <input type="hidden" id="nesting' . $value['id'] . '" class="nesting" name="nesting" value="' . $value['nesting'] . '">
                                            <button id="' . $value['id'] . '" type="submit" class="btn btn-light">Отправить</button>
                                       </form>
                                   </div>
                                </div>
                            </div>
                         <div id="comment' . $value['id'] . '"></div>';
        }

    @endphp
@endforeach


