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

通过在类中使用use关键字声明要组合的Trait名称，而具体某个Trait的声明使用trait关键词，Trait不能直接实例化。  
当方法或属性同名时，当前类中的方法会覆盖 trait的 方法，而 trait 的方法又覆盖了基类中的方法。  
当组合的多个Trait包含同名属性或者方法时，需要明确声明解决冲突，否则会产生一个错误。  
代码示例见src。
