var STORAGE_KEY = 'http://twitter.github.com/bootstrap/customize.html::settings';
function findLabel(name) {
    $.each($('label'), function (index, label) {
        if(getName(label) === name) {
            return name;
        }
    });
}
function isInput(element) {
    return $(element).prop('nodeName') === 'INPUT';
}
function isInputText(element) {
    return $(element).attr('type') === 'text';
}
function isInputCheckbox(element) {
    return $(element).attr('type') === 'checkbox';
}
function isLabel(element) {
    return $(element).prop('nodeName') === 'LABEL';
}
function getInput(label) {
    label = $(label);
    if(label.find('input').length === 1) {
        return $(label.find('input')[0]);
    }
    if(isInput(label.next())) {
        return label.next();
    }
    return null;
}
function getLabel(input) {
    input = $(input);
    if(isLabel(input.parent())) {
        return input.parent();
    }
    if(isLabel(input.prev())) {
        return input.prev();
    }
    return null;
}
function getLabelByName(name) {
    var result;
    $.each($('label'), function (index, label) {
        if(getName(label) === name) {
            result = label;
            return false;
        }
        return true;
    });
    return result;
}
function getName(label) {
    var input = getInput(label);
    if (isInputCheckbox(input))
    {
        return 'checkbox::' + $(input).val();
    }
    return 'text::' + $.trim($(label).text());
}
function getValue(input) {
    input = $(input);
    if(isInputText(input)) {
        return input.val();
    }
    if(isInputCheckbox(input)) {
        return input.is(':checked');
    }
    return null;
}
function setValue(input, value) {
    input = $(input);
    if(isInputText(input)) {
        input.val(value);
    } else if(isInputCheckbox(input)) {
        if(value) {
            input.attr('checked', 'checked');
        } else {
            input.removeAttr('checked');
        }
    } else {
        throw new Error('Cannot set value.');
    }
}
function play(record) {
    for(var name in record) {
        try
        {
            setValue(getInput(getLabelByName(name)), record[name]);
        }
        catch (e)
        {
            console.error(e);
        }
    }
}
function record() {
    var record = {
    };
    $('input').each(function (index, input) {
        record[getName(getLabel(input))] = getValue(input);
    });
    return record;
}
function retrieve() {
    play(JSON.parse(window.localStorage[STORAGE_KEY]));
}
function save() {
    window.localStorage[STORAGE_KEY] = JSON.stringify(record());
}
