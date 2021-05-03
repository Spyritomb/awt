<?php
?>

<main class="form-signin" >
    <form method="post" action="/auth/register">
        <img class="mb-4" src="/docs/5.0/assets/brand/bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

        <div class="form-floating">
            <input type="text" name="name" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Name</label>
        </div>

        <div class="form-floating">
            <input type="number" name="phone" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Phone</label>
        </div>

        <div class="form-floating">
            <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
            <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating">
            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Password</label>
        </div>

        <div class="form-floating">
            <input type="password" name="password_confirm" class="form-control" id="floatingPassword" placeholder="Password">
            <label for="floatingPassword">Re-type Password</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>

    </form>
</main>
<!---->
<!--<div id="root"></div>-->
<!---->
<!--<script type="text/babel">-->
<!---->
<!--    class NameForm extends React.Component {-->
<!--        constructor(props) {-->
<!--            super(props);-->
<!--            this.state = {value: ''};-->
<!--            //this.state = {value: 'Write your Name'};-->
<!---->
<!--            this.handleChange = this.handleChange.bind(this);-->
<!--            this.handleChange2 = this.handleChange2.bind(this);-->
<!--            this.handleSubmit = this.handleSubmit.bind(this);-->
<!--        }-->
<!---->
<!--        handleChange(event) {-->
<!--            this.setState({value: event.target.value});-->
<!--            //this.setState({value: event.target.value.toLowerCase()});-->
<!--            var textval = this.state.value;-->
<!--            //user validation of the special characters-->
<!--            var iChars = "!@#$%^&*()+=-[]\\\';,./{}|\":<>?";-->
<!--            for (var i = 0; i < textval.length; i++) {-->
<!--                if (iChars.indexOf(textval.charAt(i)) !== -1) {-->
<!--                    alert ("Your username should not have !@#$%^&*()+=-[]\\\';,./{}|\":<>? \nThese are not allowed.\n Please remove them and try again.");-->
<!--                    //return false;-->
<!--                }-->
<!--            }-->
<!--        }-->
<!---->
<!--        handleChange2(event) {-->
<!--            this.setState({value2: event.target.value});-->
<!--            var textval = this.state.value2;-->
<!--            //user validation of the special characters-->
<!--            if(isNaN(textval))-->
<!--                alert(textval);-->
<!--        }-->
<!---->
<!--//without .preventDefault() the submitted form would be refreshed-->
<!--        handleSubmit(event) {-->
<!--            alert('The submitted name is: ' + this.state.value + ', Also Phone: ' + this.state.value2);-->
<!--            event.preventDefault();-->
<!--        }-->
<!---->
<!--        render() {-->
<!--            return (-->
<!--                <form onSubmit={this.handleSubmit}>-->
<!--                    <label>-->
<!--                        Name:-->
<!--                        <input type="text" value={this.state.value} onChange={this.handleChange} />-->
<!--                        Phone:-->
<!--                        <input type="text" value={this.state.value2} onChange={this.handleChange2} />-->
<!--                    </label>-->
<!--                    <input type="submit" value="Submit" />-->
<!--                </form>-->
<!--            );-->
<!--        }-->
<!--    }-->
<!---->
<!--    ReactDOM.render(-->
<!--        <NameForm />,-->
<!--        document.getElementById('root')-->
<!--    );-->
<!---->
<!---->
<!--</script>-->
