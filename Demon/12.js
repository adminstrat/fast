var a ;

a ='最大交易网站'
//a = length(x);
alert(a);

function showin(c) {
    alert(c);
}
function re(name,age) {
    this.name=name;
    this.age =age;
    this.show = function () {
        return this.name + this.age;
        alert('run');
    }
}
var tom =new re('ton',12);
alert(tom.show());