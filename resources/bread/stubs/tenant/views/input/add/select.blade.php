            <div class="form-group">
                <label for="bread_attribute_name">bread_attribute_label</label>
                <select name="bread_attribute_name" id="bread_attribute_name" class="form-control">
                    <option value=""></option>
                    @foreach ($options as $option)
                        <option value="{{ $option }}">{{ $option }}</option>
                    @endforeach
                </select>
            </div>
