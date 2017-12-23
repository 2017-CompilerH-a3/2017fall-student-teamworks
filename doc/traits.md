## c++中的traits（用在STL中）
```
template <typename T>  
struct TraitsHelper {  
     static const bool isPointer = false;  
};  
template <typename T>  
struct TraitsHelper<T*> {  
     static const bool isPointer = true;  
}; 
``` 
第一个结构体的功能是定义所有TraitsHelper中isPointer的默认值都是false，而第二个结构体的功能是当模板类型T为指针时，isPointer的值为true。也就是说我们可以如下来判断当前类型：
TraitsHelper<int>::isPointer值为false， 可以得出当前类型int非指针类型
TraitsHelper<int*>::isPointer值为true， 可以得出当前类型int*为指针类型

## php中

### 简介  
自 PHP 5.4.0 起，PHP 实现了一种代码复用的方法，称为 trait。  
Trait 是为类似 PHP 的单继承语言而准备的一种代码复用机制。Trait 为了减少单继承语言的限制，使开发人员能够自由地在不同层次结构内独立的类中复用 method。Trait 和 Class 组合的语义定义了一种减少复杂性的方式，避免传统多继承和 Mixin 类相关典型问题。
Trait 和 Class 相似，但仅仅旨在用细粒度和一致的方式来组合功能。 无法通过 trait 自身来实例化。它为传统继承增加了水平特性的组合；也就是说，应用的几个 Class 之间不需要继承。  

### 特点
1. 通过在类中使用use关键字声明要组合的Trait名称，而具体某个Trait的声明使用trait关键词，Trait不能直接实例化。  
2. 优先级：当方法或属性同名时，当前类中的方法会覆盖 trait的 方法，而 trait 的方法又覆盖了基类中的方法。  
3. 当组合的多个Trait包含同名属性或者方法时，需要 insteadof 操作符来明确指定使用冲突方法中的哪一个，否则会产生一个错误。  
4. 修改方法的访问控制：使用 as 语法还可以用来调整方法的访问控制
5. 在 trait 定义时通过使用一个或多个 trait，能够组合其它 trait 中的部分或全部成员。

代码示例见src。

### 参考资料
http://php.net/manual/zh/language.oop5.traits.php
