@extends('layouts.front')
@section('content')
    {{--    start page--}}
    <section_
        class="u-align-center u-clearfix u-container-align-center-lg u-container-align-center-md u-container-align-center-xl u-palette-5-dark-3 u-section-1"
        id="sec-eb8a" data-animation-name="" data-animation-duration="0" data-animation-delay="0"
        data-animation-direction="">
        <img class="u-expanded-width u-image u-image-1 animated customAnimationIn-played"
             src="{{asset('image/-min.jpg')}}"
             data-image-width="1620" data-image-height="1080" data-animation-name="customAnimationIn"
             data-animation-duration="1250" style="will-change: transform, opacity; animation-duration: 1250ms;">
        <div class="u-list u-list-1">
            <div class="u-repeater u-repeater-1">
                <div
                    class="u-align-left u-container-style u-list-item u-palette-2-base u-radius-20 u-repeater-item u-shape-round u-list-item-1 animated customAnimationIn-played"
                    data-animation-name="customAnimationIn" data-animation-duration="1500"
                    data-animation-direction="Right"
                    data-animation-delay="500" style="will-change: transform, opacity; animation-duration: 1500ms;">
                    <div class="u-container-layout u-similar-container u-valign-middle-lg u-container-layout-1"><span
                            class="u-file-icon u-icon u-text-white u-icon-1 animated customAnimationIn-played"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="750"
                            style="will-change: transform, opacity; animation-duration: 1500ms;"><img
                                src="data:image/png;base64,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"
                                alt=""></span>
                        <p class="u-text u-text-1 animated customAnimationIn-played"
                           data-animation-name="customAnimationIn"
                           data-animation-duration="1000" data-animation-delay="500"
                           style="will-change: transform, opacity; animation-duration: 1000ms;">{{$photograph->address}}</p>
                    </div>
                </div>
                <div
                    class="u-align-left u-container-style u-list-item u-palette-2-base u-radius-20 u-repeater-item u-shape-round u-list-item-2 animated customAnimationIn-played"
                    data-animation-name="customAnimationIn" data-animation-duration="1500"
                    data-animation-direction="Right"
                    data-animation-delay="500" style="will-change: transform, opacity; animation-duration: 1500ms;">
                    <div class="u-container-layout u-similar-container u-valign-middle-lg u-container-layout-2"><span
                            class="u-file-icon u-icon u-text-white u-icon-2 animated customAnimationIn-played"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="750"
                            style="will-change: transform, opacity; animation-duration: 1500ms;"><img
                                src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIAAAACACAYAAADDPmHLAAAAAXNSR0IArs4c6QAAF2ZJREFUeF7tnQmwbUdVhtevIqLiBGIYRSCGCCFCoTKDICFIIMyBEAhjCEQCSMJgCHMMAkJAEUIIEkVDZFSGEATFEREVQRRBVAYHIg4oooLDb323+rw6977Tw967z7nnnndX1av3Xp29e/fu/nf3Gv61WrEv20bA9hERcW5E3CYi/jsifjci3hcRvy7pzzZtuLRpLzTlfWxfKyI+GBGHZdr5h4j4DcAAKCR9bMrz1uHefQDMzYLtF0TEmQMm5vK0OvxaRLxB0r8MuHctLt0HwHYAvDsi7jxyZv4jIn4xIn5a0odHtrHy2/YBsB0AF0XEQzrMwm8DhIh4syT0iLWVfQBsB8AtI4LJ+6pOM/b3EfGqiDhfEv9eO9kHwI4psf2A9PVepeNssQq8OSJeLOn3O7Y7uamlAMD2jSPiFhFxjYhgIP8xIv4Ok2ovaM62rxgRd4mIO0bEHSLiJhHRY6wcERdGxFMk/fPk2evQQI+X2uqG7a+OiMdHxKkRcXihb38eET+TlCUGZO3F9rdFxO0i4gcTII6aCIjPR8STJP38br98FwDYZsJRoNhDW+W9EfFQSX/TesO6XGebVQ1AsEqcGBFXHtk3zMfHSPrEyPsn3zYJALa5/3ER8fyIuNKI3mA3P1bS60fcuxa32GbyHxwRp0XE94zo1JfT+J0riX+vVEYDwPY3JsVmrN08/6KviYhTJP3vSt++88NsozP8SETcIyLYEocIqwCrAavCymQUAGx/Q0RcGhG37dhTVoGT9joIGA/b10660KMi4tsHjtEFgEjSVwbeN+rywQBIk//OtAeOemjhpjewp0r6n94N70Z7yZpAKX7uQD2B4NO9V+FaHgQA218fEe9ImnDLmLLHfyQijo6Ib2m5ISLeFBEPXHcPWuO7bF1m+5oR8TImdcB9H4+Iu0n6ywH3DL60GQBp8t+eTKHag4iSsfxh9zuZiN8fES+NiO+r3RwRb42I+28SCBIQjouIl0fEdRrGgEvwnxwviZD0UqQJALbR8Jl8lJyavDoiTpf0nzsvTEviKyLiYbVGIuJXIuK+GwgC9KdnRcQTIuJrGsYBywBzeSmWUhUAafLfFhF3aujseZKeWLoumY4ESh7b0B7bwQM2RSeYf1/bbIvnR8QPNIwDDrOzJZ3TcO2gS4oAsP116UtsMfWqk79jAAABtnNNNsY6WLAiEnQ6KyKe3ehZfG0yl7tFGLMASJP/yxFxTG2GImLQ5M/as41ihCOpJr8QESdvgom46EVTAOpnI4IPriaXRcTde22NCwFg+2vTl4+rsyajJn8OBOelGELtOZsOAtzofHAtfoMLJT2yNmAtv+cAgGeuRVGbNPn7INg+Rba/K5nZRzZM3tMk4YKfJAcBwPaTI+InGlrtMvlzIMA8alEMN30lwF/yxgalG8XwBEk4z0bLNgDYRtl7VwMjpuvk0/tkHaAV4z+oyVJAYPubkwuXSB8DPKOEf7DXnlt7sTQWV0gh89oy/1/4ZST9Xku7i645AADbPPRPIgJefEm6T/7cKkB/IEy0bD9dQWD7mxLD96YLXv5LiSoGHfy9kv5g7IAPuc821sEzKvdAVb+FpL8e0vbs2nkAnBERL6w08lJJODCWJrYxjXAmrRQEts+OiOc0vhgfCmbs6yTBBl6a2MY6eGjlAXhebyXpC0M7sgWAhP7PRgRfQU5A/w9J+r+hDxl6/UAQvFZSC1iK3bD9WykbaEh3GXAm6OXL8tmnlRm6OtS0kkCwuevQrWoGgIenpTf3AII6N1kle2cgCJ4hiYjbaLH9qwB8ZAPoC3hLoXl9cmQb2dtsf2tEvL9hewaI8BGaZQYAvu4SwgjMTNI2m3s0d+FAEBA+fcuY56RVEIWLWPwUQSkjr/D5veP5tq8fESh7Vy10ECDeZkjwiFAdoUqW/5xX8C2ShoQxpwzgQfcOAAHvcMSiIFRLh9JzUEBr+21Lc4RyYffwYXUT2ySsviciYC3n5KMRcdPW+AkAuFeiduUafMhus1cHgKDHVvC9EXGfFPkkdI11NFZ+Di/nGOUs90DbD0L5rHToqZJafDkBAJ6eGCu5Nq8l6W/HjkCv+xIIoFHDws0J2Tf0t4uimthPfHWEwX84Ish3GCpo6BA7Rplpix5mG2sFqyUnWCY3kvSpWmcBwMWEXDMXfkJSzS9Qe0a331No+gMRAS8/J3eQRAp3d7ENBxIliy2xJZY/6wO2+j0k0ffJkgg2+CJYrXLyTkl3qz0MAODtyvH5XynpMbVGVvm77e+OiD8tTMA5kljVlia2yXiC68fYlJSy+T5AkGE7xc07WWzDsMIyKOUx3q/2PACAZpkjJUzeUye/6YIGKqC9SFIPRa7a9ZQxRE0BzOgquSa5l9mfuWey2K5xKkjHO1LSv+UeVgNAl4jT5Dfd0UClkMNlko7t/cxSe7aJHbySwW587pmSXtR4bfay5MAj1e7qhbZ+StLpYwHQpaNTX3Tn/bahiuVMUyp13L/3M2vtJQ7F05LvvpZejr0O35GM4Uli+34R8UuFRlCIj5aEeXiQ1FYAPFsvntTDzjengUbbJ2FzkSw9XlFZDe4eESjWkD9Lgk6Awjo5Xdw2eRp3LTzsAkmnjAHACyXBD1gbaaCRwaAlUXXXxDYRRVjUKIslocYQkbyquVYBHUQSvnDyNhYJZuE1F/kjWAFI9MDGXSSXSMqZiCsfYNsnRESJHk061dUk/evKO7fjgcnDCghKphp3UXqOSN6kPttm+/nxwnsvXM0BwEsSR33Rve+XdKvdHkyebxvFjoSRkhv0TZLuuw79TX0mc5goIxTwkrxaUgsRJttGStbFYZeL6JJhdDiJOvONAABsWQo2LJLPSSppmCsZ68bJJ5/wKEloxWsjaSXAAUTMJSdMyu0kUZ9otNgm8yqr8bPSSyKp94AAANycxJJzgh25a4Nqm+0Jbbn05dP3l0miQsnaiW22AVYCUupzgnOLIM5ozn9ykjFXOZ/EQd5BAEB1TCJpOdk1S8D28cnEgaZeEpxZcOMIx66l2MYtC+27VDfgLEmlfbz6brbhdObo/Kw0bAMHEk4BAGj5p4iAdLBI3iOpJTOo2rkhFyT7lsKLNZ87QRY0afztay22n5nyAnP9xDS8saS/GvsiCWgonzmhUtmTZj/OCCGlgBCa9VUk/fvYTg29L4U8MeVqVTbwB7B3dmfhDO1zy/XJh0G6fCnARnFJwtGjJEVN/yIirpdpAHYXEdMtLuMMALUY8z0lsXwtXWzD74MUWvOm8cXffjf1kzGDYZtKY6UyMHjurj/FN2D7RyPiJwv9O8DwmgGAqlc4JXJfHJUuiX4tVWzzDCySWmCFyb9Tzr251E52aNx2rSTtCyQ9ZeyjbJNcgkmYcwy9QtJWEs48LRwT5NaZh35G0neO7VDLfbYxXzBjavK5NPl7tna/bfL/KAqVq5qCTnbtsfQ2BtA2mcQnZwbzY5K2KprNA+CpidCYmwCUE0yV7mIbPzYeydqXT3jzjpLg3O1psU0OBrkYOXmEJHI0R4ntkyKiVIjyMEmXzwMAuhMJDzmhvGmXOPb8A1JMHdu1lhVLQUlMvT2h8NVmLSWC8i45XedDkm5Wayf3e6pU9pnC/RTeuGRnbiBBidxSz1eHU6hreVfbtZwE3uHTafK78erGDmzP+2xTBofoYU4I42I1jBLb2Ps5a2BLr9sJgFqG7l0kkaXSTRpYLdjELPuAYKPENsU3KPiQkydIatGLFt5vu5Tm/3FJN9wJgJqJ8nZJJcQOnqCGKBbs1j2r8JUGJDnhsNlJ+lgkb5UEbX+U2EYJRBnMyTUW1QdA0cvVvMVGxZU42lO1sye2H5iOWsl18nmSShToUYOzLjdVVkBKyl917LZrm+28xDU4cREAStFBxm2bK3HqQKZYBHtVzt+Px+oG63riRof3x+tXYgpP1QNKet2rFgEAKhNOBIolLBIyYmGXdEuLbtADspSmqROw2/fbhlaOYytnApNZRDGtUVJxOn04VyMIHmCp3t+jJXEWThdJPHtWgVyVLKqIk528qboAp4xxKskiuVhSKRuqOAcVf8BHcgBAKcFTlbNRPyqplJ0zGBi2a6B7myTKsG+c2MZvj/9+kUxiOdsmmop/54YLGn9RqU4gIcVSatGkdOydnbF9tYjAzs/5r7kFKjWU8I2SpAfhZ1n07mQZk3MwWhKjCp/DfKLrH3FGYgkAkAogF+QE7x3u4W6HPNim7FkpCIJWjFK0546Zqc2ebWoBURNoXn4TckcPokvSNciXIN5D2jpby5dKAOA3MltLsetHSSJ020XSWTysAqUzeFZWqqbLSw1oxDbp6PjwWa6pOPKansr2oq4Ugy8NjgSsBfwCB1UGH/De2y61DVulljbVnP8+th+Hyn01AKAE/nElHbvrZCTvGFUwSqXpIU7eUtIfHioTtaz3rIVfiSujCJY4ZvgFrtfzeJNEpSYIkkv/YjywUm7GPraswTkU2q0CgEGwTcEFMmBz0j2FzDYJHrXCVNDFyYHvUhHkUJjwne/YCgCOgaUYQU6gY6MLdNXOK9GsWV92NRl0r4OmCQBpFeBrK0WmJkWuFg1kSndCB8lFy2a3PVESZef3ZeAIDAEApgkZqCWqNqd9dT3bxjbVS+ArlvID2AJgum6ck2jgfA6+vBkAaRXA/19KYuSUK+L3XZM0bNf4inSPbQim8NJO2Bo8unvghqEAIN8dl2Upx+2Nkqha0VUa9QHYtJiHkCz2pWEEBgEgrQI1vgCXVatTNfRt2yWpaDKVMGr1fDeSPzh0vFqvHwMA7iGzpVRbmC2ArYAtoZukokjoA7VIJGxYGMTdmEvdXmLNGhoMgLQKwDQlxFiK3L1eEnSvrpIiZ+Tb18qvbBSNvOsgzjU2CgAJBOTi10yve0miqkdXSfn2RMpKQSOeSayClWBfJ8jMwBQAECdgEnLpZDySLQB3ban+wChwpBg3EbNa+viuZRMlMgYxDeocUOGUY+UZN8YDUPJxkH6/a6eljwZAWgV4KehMpQMPKYN2297189PzoUpRkbuWRk4+Iadp4FRaiSQqFvWXaqVk+UgoCkFBx5UDYRIA0iScGRG1lLED2ai9Rz+dukn59BoICBo9aNlp7ul0Dw7IpqLZEIHveJKkDw25aeq1PQDAwON8oXhxSR4sqVbnftT7DKgmgsfwx1pr6Q/tTKq3ROo3ZXfGCCAlZ68UfR3TbvaeyQBIq8DhEUH58tKhU9DIKeVSSkAd/XK24dfjhq7pBDyDSTql57aUDtyE0jZ1TKHYwbTiMKqly9TOHuhgw8kjXIvic/NS9eopb5z6cEnjKR/4E7BSJvsqGl3VQ16NlYr08FJa15D2lrsCzFq3zTEltdKySz2DaEBlMbqN15Aa/lgzo2QJkz/rByB4+LLL3nZbAdJWgD7A8WskmZbkyZJqh1SOmpDUD072IHxd08C5nIGGg3j20C1hwOSTUs8WCcuaMYJxTe5/bfzp28MkYeksRWodGPzQxO+Hc16qjMk+x/KLHb8USQUYaP9GjQ/AnEULX1hWfWcbAyYflvN9dmr3tm+fGE+1whhLBUF3AKQvkPrC76vsxYRvj13W+T6pHyillMDLFcPeOa9fxkqIiJeUMnIHTD56xvGSyGc4SGxfN3H0+bskgIAq6KWSL404337ZUgCQBv9xlG+t9IqjTHDVsmIsRdIBS2w3pVzHnc9m4s5YdMjTgMmnNCy1eYv1FVMKNx9LCwhO7m1KLw0ACQRU+qwFhD6fPIVLLfxkm5NBKUE35BxATiLFb7BVK7n35M9QNwAEbJ2AgJPTu8iyAUCqOXV8a+ftEb7lyNPuMYP5UbJ983To4pCj8Bh0/AZUJT2rYdSxKPjyB9HVB4IAy4WPa7IsFQDpq8ErxpJaqzPIV0bMYLJdXhqVdPYgW8Jpk0fv4Aagz3NI5KDJn1sJrpN0J04AKQmgxLOKfjNJlg6ABAI8hYCADOCSkOmDTvDFSW/VcLNtTDGKKNV4BQ2tbV0yafJHggCrZRIJdyUASCDgHB0SO3OVR2ZjgEJE5G7ppd9TjUJSr6dyGOkzX36Xqim2h6wEBLjwfo6SlQEggQAHDWXRrlTpLYWpqQWwkvBoKlSFF5N4/VDpOvk7VgI+mFydv9mlbAcnSiodHZd9p5UCIIGAXEOIELWgDTYvXrBu9QdKM2sbTgMsJw5fqq1Ss6aYoON6ffk7+5eqfQKwGgj4UABBLZXuoCFYOQASCCByEBquPR8W8Ak1W3roJ1sBApXTyUNASSytVBTMxJvZZdnP9WnZIKhNQM+x3daWbQaYs29rAkGC/RUzbGWSCldRtYOzFObzIFBQSZAhLX5VWxRbU+tKwIpUqj66bQx3DQBpJaAA5HMaZhU/ASBo8tM3tNd8ScpHoHIHPgTAyFF6K5n4+U6mlYAtp5YniXf11q1jtasASCAonVs4PwYcrEhQpXTCWfPE7sULEyWelaAGAkruUb+pakmtAwDoA/Z4y5HvVAaBLbOrR8PuJngGgODpks6p9XXXAZBWAfqBd+7AaVaVjj9b0rNqL7epvzeCAG/kdWue1bUAwGyikmJIefQaw5dbIEk8cspBi3sZIEknIIpaIr3Ae7yg9J5rBYC0GrQev87l5ChSsHLSwct7FQgpOQZTOTeP75aUO0Ry67XXDgAJBGjcUKO/o2FySAAlMHJI1gWoHA71BUm5A0HXFwAJBBAkQPeRDSDAW3guJuWhtiXYpvpnKRZw5ZIjbS1XgDmdgGPVIGWUUtHn8QHxkgjZUsklDYBc2SW2Kd1DRdecUMIve9bSWgMgrQQcJIGZiEeuRahaeqYkzj/aeLGNW73EENq7K8D87Nl+XiMjZ3YbFGx49St1Ia8acbYJmlFfeJF8UVIpW2s9lcDcINp+RETwZV+xcaCpGYQpRI7Axkk6dQyg51bySyUVGdFrvwXsnDXblIdhyauViZm/lRSr01fBNFoVylL+BenuVy88Ez/JhaU+7TkAJL2AFYCceqjere9AGhi6weCY+aomtfU5afKJiZTIttRpOkIStZyz0jp4rX1b6XUj07FhKcP5/52VdrbTw2zjG8EBljvab/ake7bUQtjTAEirAY6OMQUZ0AuI6e+Z+kG2D0uTX/ONXCSpJbjWvHx2wu/ymrGNmYiC2ErnojNEF8/nqJZa0GR5PW9rOR05D/O4NvlwJ45qTcHf8yvA/PAlNi1BIhIvhwgkCjyJ57XE0Ic03OPaxF5m2T+60h4e0WMkcW2TbBQA0pZAFa4zIuK5hdNIc4NDZhLZP68be1xr06gPuCgVx0ThIz5SklFpYxsHgNkIpVqCcA5LZexyA4p5BT+BusdfGTBfXS+1TWod5FOyrbtPPg1uLADmgHDviKB2D9lJQ4XEVezo8yWVDmEe2m71+pTCRjCsFgcZ9eXPOrDxAEjbAhnBp0YELN+WqiE7J4j8/EtTdvG7ln1ETfryCYLduYIU+jUpZfyQAMDcaoCFQOIHCSCl4palcWclIJ2MM/1YIbpK0vbfEREwkUtC2Rn4kUVPX61zhxQA5oBA7h2ESUzHsWNANRFS2FimYd5MDjrZphQ+4KqxfnmV0yRR72CSjH35SQ9dl5ttU6iJAlG1olYtXab+IQkZKG0faLXDbWO1cCwOpWmOa3kQ5FlJHLY9WQ5pAMytCAw8yaE19+qQAccX/8lUGxFvI/+Gu0gcg8JQpMpD5jg2/b+17bMkEQfpIvsASMOYTiw9JiI4EQVAtDCTu0zCgEaeKaklk6q5yX0ALBiqdHIph2NRV6hU7q55oCdeiKl3as+Dumf92QdAYWZShTFo6qwKmGS7MV4keJAhjWXQXXbjhbq/xCoatE2O/qOpWTBwz57SPZJBH7+sAtt0bB8AA6fHNiRVVgWUN8y2Wn2/gU/YupyDsSmni5m5VNkHwMThtX2DtD2wRWBOQmUfI7CZqbPM6acXryq/YR8AY6Yqc0+yJFAaAQV/cOjM/maloNAECt3lc3843YyJv2zZ1UYWdfv/AeE19h7YSh8PAAAAAElFTkSuQmCC"
                                alt=""></span>
                        <p class="u-text u-text-2 animated customAnimationIn-played"
                           data-animation-name="customAnimationIn"
                           data-animation-duration="1000" data-animation-delay="500"
                           style="will-change: transform, opacity; animation-duration: 1000ms;">
                            <a href="https://nicepage.dev/"
                               class="u-active-none u-border-1 u-border-hover-white u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-light-2 u-bottom-left-radius-0 u-bottom-right-radius-0 u-btn u-button-link u-button-style u-hover-none u-none u-radius-0 u-text-body-alt-color u-top-left-radius-0 u-top-right-radius-0 u-btn-1">
                                {{$photograph->number}}</a>
                            <br>MON - FRI...8AM - 7PM
                        </p>
                    </div>
                </div>
                <div
                    class="u-align-left u-container-style u-list-item u-palette-2-base u-radius-20 u-repeater-item u-shape-round u-list-item-3 animated customAnimationIn-played"
                    data-animation-name="customAnimationIn" data-animation-duration="1500"
                    data-animation-direction="Right"
                    data-animation-delay="500" style="will-change: transform, opacity; animation-duration: 1500ms;">
                    <div class="u-container-layout u-similar-container u-valign-middle-lg u-container-layout-3"><span
                            class="u-file-icon u-icon u-text-white u-icon-3 animated customAnimationIn-played"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="750"
                            style="will-change: transform, opacity; animation-duration: 1500ms;"><img
                                src="data:image/png;base64,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"
                                alt=""></span>
                        <p class="u-text u-text-3 animated customAnimationIn-played"
                           data-animation-name="customAnimationIn"
                           data-animation-duration="1000" data-animation-delay="500"
                           style="will-change: transform, opacity; animation-duration: 1000ms;">
                            <a href="#"
                               class="u-active-none u-border-1 u-border-hover-white u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-light-2 u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2"
                               data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                               data-animation-direction="">
                                {{$photograph->email}}</a>
                            <br>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div
            class="u-align-center u-container-align-center u-container-style u-group u-radius-20 u-shape-round u-white u-group-1 animated customAnimationIn-played"
            data-animation-name="customAnimationIn" data-animation-duration="1750" data-animation-delay="500"
            style="will-change: transform, opacity; animation-duration: 1750ms;">
            <div class="u-container-layout u-valign-bottom u-container-layout-4">
                <img class="u-image u-image-circle u-preserve-proportions u-image-2 animated customAnimationIn-played"
                     src="{{asset('/storage/' . $photograph->picture)}}"
                     alt="" data-image-width="310" data-image-height="310"
                     data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"
                     style="will-change: transform, opacity; animation-duration: 1500ms;">
                <h1 class="u-align-center u-text u-text-4 animated customAnimationIn-played"
                    data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="750"
                    style="will-change: transform, opacity; animation-duration: 1500ms;"> Привет</h1>
                <h4 class="u-align-center u-text u-text-palette-2-base u-text-5"> Немного обо мне_)</h4>
                <p class="u-align-center u-text u-text-6"> Я креативный фотограф из Казахстана. Делаю крутые фотографии
                    &amp; разрабатываю дизайны на сайт. Я надеюсь ты выбирешь имено меня так как я оправдаю все твой
                    надежды.</p>
            </div>
        </div>
    </section_>

    {{--    links page--}}
    <section class="u-align-center u-clearfix u-container-align-center u-palette-5-dark-3 u-section-2" id="sec-8700">
        <div
            class="u-clearfix u-sheet u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-valign-middle-xs u-sheet-1">
            <h1 class="u-align-center u-text u-text-palette-2-base u-text-1 animated customAnimationIn-played"
                data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="250"
                style="will-change: transform, opacity; animation-duration: 1500ms;"> {{$photograph->name}}</h1>
            <p class="u-align-center u-text u-text-2 animated customAnimationIn-played"
               data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"
               style="will-change: transform, opacity; animation-duration: 1500ms;">
                {{--                Я цифровой фотограф, Очень сильно люблю делать фотографии, рисование и открытие новых миров и культур.--}}
                {{--                Выбрав меня ты не пожалеешь, так как я постараюсь оправдать все твой ожидания!--}}
                {{$photograph->about}}</p>
            <div
                class="u-align-center u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-expanded-width-lg u-expanded-width-md u-expanded-width-sm u-expanded-width-xs u-group u-shape-rectangle u-group-1 animated customAnimationIn-played"
                data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500"
                style="will-change: transform, opacity; animation-duration: 1500ms;">
                <div
                    class="u-container-layout u-valign-middle-md u-valign-middle-sm u-valign-middle-xs u-container-layout-1">
                    <div
                        class="u-align-center u-border-4 u-border-white u-container-style u-group u-hover-feature u-shape-circle u-white u-group-2">
                        <div class="u-container-layout u-valign-middle u-container-layout-2">
                            <h5 class="u-hover-feature u-text u-text-default u-text-palette-1-base u-text-4">
                                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-2"
                                   href="#rewie">Отзывы</a>
                            </h5>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-border-4 u-border-white u-container-style u-group u-hover-feature u-shape-circle u-white u-group-3"
                        data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                        data-animation-direction="">
                        <div class="u-container-layout u-valign-middle u-container-layout-3">
                            <h5 class="u-hover-feature u-text u-text-default u-text-palette-2-base u-text-5">
                                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-2-base u-btn-3"
                                   href="#exp">Опыт<br>
                                </a>
                            </h5>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-border-4 u-border-white u-container-style u-group u-hover-feature u-shape-circle u-white u-group-4"
                        data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                        data-animation-direction="">
                        <div class="u-container-layout u-valign-middle u-container-layout-4">
                            <h5 class="u-hover-feature u-text u-text-default u-text-palette-3-base u-text-6">
                                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-2-base u-btn-4"
                                   href="#contact">Контакты</a>
                            </h5>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-border-4 u-border-white u-container-style u-group u-hover-feature u-shape-circle u-white u-group-5"
                        data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                        data-animation-direction="">
                        <div class="u-container-layout u-valign-middle u-container-layout-5">
                            <h5 class="u-hover-feature u-text u-text-default u-text-palette-2-base u-text-7">
                                <a class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-palette-1-base u-btn-5"
                                   href="#port">Мое Портфолио</a>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    rewie--}}
    <section class="u-align-center u-clearfix u-container-align-center u-palette-5-dark-3 u-section-4"
             id="carousel_468a">
        <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-xl u-sheet-1" id="rewie">
            <h2 class="u-align-center u-text u-text-1 animated customAnimationOut"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500" data-animation-delay="250"
                style="will-change: transform, opacity; animation-duration: 1500ms;">Отзывы</h2>
            <div class="u-expanded-width-sm u-expanded-width-xs u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div
                        class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-1 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="250"
                        style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-similar-container u-valign-top-xl u-container-layout-1">
                            <div alt=""
                                 class="u-border-12 u-border-palette-2-base u-image u-image-circle u-image-1 animated customAnimationOut"
                                 data-image-width="864" data-image-height="1080" data-animation-name="customAnimationIn"
                                 data-animation-duration="1500" data-animation-delay="500"
                                 style="will-change: transform, opacity; animation-duration: 1500ms;"></div>
                            <p class="u-text u-text-2">Sample text. Click to select the text box. Click again or double
                                click to start
                                editing the text.</p>
                            <h6 class="u-text u-text-default-xl u-text-palette-2-base u-text-3">stella larson</h6>
                        </div>
                    </div>
                    <div
                        class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-2 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="250"
                        style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-similar-container u-valign-top-xl u-container-layout-2">
                            <div alt=""
                                 class="u-border-12 u-border-palette-2-base u-image u-image-circle u-image-2 animated customAnimationOut"
                                 data-image-width="980" data-image-height="1500" data-animation-name="customAnimationIn"
                                 data-animation-duration="1500" data-animation-delay="500"
                                 style="will-change: transform, opacity; animation-duration: 1500ms;"></div>
                            <p class="u-text u-text-4">Sample text. Click to select the text box. Click again or double
                                click to start
                                editing the text.</p>
                            <h6 class="u-text u-text-default-xl u-text-palette-2-base u-text-5">nick jhonson</h6>
                        </div>
                    </div>
                    <div
                        class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-3 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="250"
                        style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-similar-container u-valign-top-xl u-container-layout-3">
                            <div alt=""
                                 class="u-border-12 u-border-palette-2-base u-image u-image-circle u-image-3 animated customAnimationOut"
                                 data-image-width="1000" data-image-height="1500"
                                 data-animation-name="customAnimationIn"
                                 data-animation-duration="1500" data-animation-delay="500"
                                 style="will-change: transform, opacity; animation-duration: 1500ms;"></div>
                            <p class="u-text u-text-6">Sample text. Click to select the text box. Click again or double
                                click to start
                                editing the text.</p>
                            <h6 class="u-text u-text-default-xl u-text-palette-2-base u-text-7">olga ivanova</h6>
                        </div>
                    </div>
                    <div
                        class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-4 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="250"
                        style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-similar-container u-valign-top-xl u-container-layout-4">
                            <div alt=""
                                 class="u-border-12 u-border-palette-2-base u-image u-image-circle u-image-4 animated customAnimationOut"
                                 data-image-width="1260" data-image-height="698" data-animation-name="customAnimationIn"
                                 data-animation-duration="1500" data-animation-delay="500"
                                 style="will-change: transform, opacity; animation-duration: 1500ms;"></div>
                            <p class="u-text u-text-8">Sample text. Click to select the text box. Click again or double
                                click to start
                                editing the text.</p>
                            <h6 class="u-text u-text-default-xl u-text-palette-2-base u-text-9">paul hudson</h6>
                        </div>
                    </div>
                    <div
                        class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-5 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="250"
                        style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-similar-container u-valign-top-xl u-container-layout-5">
                            <div alt=""
                                 class="u-border-12 u-border-palette-2-base u-image u-image-circle u-image-5 animated customAnimationOut"
                                 data-image-width="512" data-image-height="750" data-animation-name="customAnimationIn"
                                 data-animation-duration="1500" data-animation-delay="500"
                                 style="will-change: transform, opacity; animation-duration: 1500ms;"></div>
                            <p class="u-text u-text-10">Sample text. Click to select the text box. Click again or double
                                click to
                                start editing the text.</p>
                            <h6 class="u-text u-text-default-xl u-text-palette-2-base u-text-11">cash hudson</h6>
                        </div>
                    </div>
                    <div
                        class="u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-6 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="250"
                        style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-similar-container u-valign-top-xl u-container-layout-6">
                            <div alt=""
                                 class="u-border-12 u-border-palette-2-base u-image u-image-circle u-image-6 animated customAnimationOut"
                                 data-image-width="1000" data-image-height="1500"
                                 data-animation-name="customAnimationIn"
                                 data-animation-duration="1500" data-animation-delay="500"
                                 style="will-change: transform, opacity; animation-duration: 1500ms;"></div>
                            <p class="u-text u-text-12">Sample text. Click to select the text box. Click again or double
                                click to
                                start editing the text.</p>
                            <h6 class="u-text u-text-default-xl u-text-palette-2-base u-text-13">mike perry</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    line--}}
    <section class="u-clearfix u-image u-shading u-section-5" id="sec-a7bd" data-image-width="1896"
             data-image-height="1080">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div
                        class="u-align-left u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-1 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1250"
                        data-animation-delay="250"
                        style="will-change: transform, opacity; animation-duration: 1250ms;">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-1">
                            <h6
                                class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-font-montserrat u-text u-text-2">
                                Свдебные фотографии в 8к</h6>
                        </div>
                    </div>
                    <div
                        class="u-align-left u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-2 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1250"
                        data-animation-delay="250"
                        style="will-change: transform, opacity; animation-duration: 1250ms;">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                            <h6
                                class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-font-montserrat u-text u-text-4">
                                Свадебные видео в 4к</h6>
                        </div>
                    </div>
                    <div
                        class="u-align-left u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-3 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1250"
                        data-animation-delay="250"
                        style="will-change: transform, opacity; animation-duration: 1250ms;">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                            <h6
                                class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-font-montserrat u-text u-text-6">
                                Тысячи удавлетворенных клиентов</h6>
                        </div>
                    </div>
                    <div
                        class="u-align-left u-container-align-center-lg u-container-align-center-md u-container-align-center-sm u-container-align-center-xs u-container-style u-list-item u-repeater-item u-shape-rectangle u-list-item-4 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1250"
                        data-animation-delay="250"
                        style="will-change: transform, opacity; animation-duration: 1250ms;">
                        <div class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                            <h6
                                class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-custom-font u-font-montserrat u-text u-text-8">
                                Выезд в любую точку и в любое время</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    exp--}}
    <section class="u-clearfix u-image u-valign-middle-md u-section-6" id="carousel_8bb2" data-image-width="1980"
             data-image-height="1320">
        <div class="u-clearfix u-layout-wrap u-layout-wrap-1" id="exp">
            <div class="u-layout">
                <div class="u-layout-row">
                    <img class="u-container-style u-image u-layout-cell u-size-36
                     u-image-1
                      animated customAnimationOut" data-image-width="1349" data-image-height="1080"
                         data-animation-name="customAnimationIn"
                         data-animation-duration="1500" data-animation-delay="500"
                         style="will-change: transform, opacity; animation-duration: 1500ms;"
                         src="{{asset('/storage/' . $photograph->picture)}}" alt="">
                    <div
                        class="u-align-left u-container-style u-layout-cell u-size-24 u-layout-cell-2 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="500"
                        style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-valign-middle u-container-layout-2">
                            <h2 class="u-text u-text-body-alt-color u-text-1 animated customAnimationOut"
                                data-animation-name="customAnimationIn" data-animation-duration="1500"
                                data-animation-delay="750"
                                style="will-change: transform, opacity; animation-duration: 1500ms;"> Стратегия крутых
                                фотографии
                            </h2>
                            <ul class="u-custom-list u-text u-text-body-alt-color u-text-default u-text-3">
                                <li>
                                    <div class="u-list-icon u-text-palette-1-base">
                                        <div xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             version="1.1"
                                             xml:space="preserve" class="u-svg-content">►</div>
                                    </div>
                                    Бриф
                                </li>
                                <li>
                                    <div class="u-list-icon u-text-palette-1-base">
                                        <div xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             version="1.1"
                                             xml:space="preserve" class="u-svg-content">►</div>
                                    </div>
                                    Концепция и референсы
                                </li>
                                <li>
                                    <div class="u-list-icon u-text-palette-1-base">
                                        <div xmlns="http://www.w3.org/2000/svg"
                                             xmlns:xlink="http://www.w3.org/1999/xlink"
                                             version="1.1"
                                             xml:space="preserve" class="u-svg-content">►</div>
                                    </div>
                                    Раскадровка
                                </li>
                            </ul>
                            <a href="#contact"
                               class="u-active-white u-border-none u-btn u-btn-round u-button-style u-hover-white u-palette-2-base u-radius-50 u-text-active-black u-text-hover-black u-btn-2">Связаться
                                со мной</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    Portfolio--}}
    <section class="u-align-center u-clearfix u-container-align-center u-palette-5-dark-3 u-section-3"
             id="carousel_998d">
        <div class="u-clearfix u-sheet u-sheet-1" id="port">
            <h2 class="u-align-center u-text u-text-1 animated customAnimationOut"
                data-animation-name="customAnimationIn"
                data-animation-duration="1500" data-animation-delay="0"
                style="will-change: transform, opacity; animation-duration: 1500ms;">Мое Портфолио</h2>
            <p class="u-align-center u-text u-text-2 animated customAnimationOut"
               data-animation-name="customAnimationIn"
               data-animation-duration="1500" data-animation-delay="250"
               style="will-change: transform, opacity; animation-duration: 1500ms;"> {{$photograph->experience}}.</p>
            <div class="u-expanded-width u-list u-list-1">
                <div class="u-repeater u-repeater-1">
                    <div
                        class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-white u-list-item-1 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="500"
                        style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-similar-container u-container-layout-1">
                            <img
                                class="u-expanded-width u-image u-image-round u-top-left-radius-10 u-top-right-radius-10 u-image-1"
                                src="{{asset('image/4.jpg')}}"
                                alt="" data-image-width="444" data-image-height="444">
                            <h4 class="u-custom-font u-font-roboto-condensed u-hover-feature u-text u-text-3">Работаю на
                                выезд</h4>
                            <p class="u-hover-feature u-text u-text-4"> Фотограф</p>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-2 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="500"
                        style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-similar-container u-container-layout-2">
                            <img
                                class="u-expanded-width u-image u-image-round u-top-left-radius-10 u-top-right-radius-10 u-image-2"
                                {{--                                src="../../../About_files/ui.jpg"--}}
                                src="{{asset('image/ui.jpg')}}"
                                alt="" data-image-width="444" data-image-height="444">
                            <h4 class="u-custom-font u-font-roboto-condensed u-hover-feature u-text u-text-5">Фирменный
                                стиль</h4>
                            <p class="u-hover-feature u-text u-text-6"> Фотограф</p>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-3 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="500"
                        style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-similar-container u-container-layout-3">
                            <img
                                class="u-expanded-width u-image u-image-round u-top-left-radius-10 u-top-right-radius-10 u-image-3"
                                {{--                                src="../../../About_files/7.jpg"--}}
                                src="{{asset('image/7.jpg')}}"
                                alt="" data-image-width="444" data-image-height="444">
                            <h4 class="u-custom-font u-font-roboto-condensed u-hover-feature u-text u-text-7">Свадебные
                                фотографии</h4>
                            <p class="u-hover-feature u-text u-text-8"> Фотограф</p>
                        </div>
                    </div>
                    <div
                        class="u-align-center u-container-style u-list-item u-radius-20 u-repeater-item u-shape-round u-video-cover u-white u-list-item-4 animated customAnimationOut"
                        data-animation-name="customAnimationIn" data-animation-duration="1500"
                        data-animation-delay="500"
                        style="will-change: transform, opacity; animation-duration: 1500ms;">
                        <div class="u-container-layout u-similar-container u-container-layout-4">
                            <img
                                class="u-expanded-width u-image u-image-round u-top-left-radius-10 u-top-right-radius-10 u-image-4"
                                {{--                                src="../../../About_files/trt4.jpg"--}}
                                src="{{asset('image/trt4.jpg')}}"
                                alt="" data-image-width="444"
                                data-image-height="444">
                            <h4 class="u-custom-font u-font-roboto-condensed u-hover-feature u-text u-text-9">Разработка
                                логотипов</h4>
                            <p class="u-hover-feature u-text u-text-10">Фотограф</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    must--}}
    <section class="u-clearfix u-container-align-center u-palette-5-dark-3 u-section-7" id="carousel_916b">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <div class="u-layout-row">
                        <div class="u-size-31-sm u-size-31-xs u-size-33-lg u-size-33-xl u-size-60-md">
                            <div class="u-layout-col">
                                <div
                                    class="u-container-align-left u-container-style u-layout-cell u-size-60 u-layout-cell-1 animated customAnimationOut"
                                    data-animation-name="customAnimationIn" data-animation-duration="1500"
                                    data-animation-delay="250"
                                    style="will-change: transform, opacity; animation-duration: 1500ms;">
                                    <div class="u-container-layout u-valign-middle u-container-layout-1">
                                        <h2 class="u-align-left u-text u-text-default u-text-1 animated customAnimationOut"
                                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                                            data-animation-delay="500"
                                            style="will-change: transform, opacity; animation-duration: 1500ms;"> Лучшие
                                            работы</h2>
                                        <p class="u-align-left u-text u-text-default u-text-2">Делаю фотографии для
                                            разных родов мероприятии:
                                            свадебные фотографии,
                                            корпоротивные фотографии,
                                            фотографии дней рождении,
                                            праздничные фотографии.
                                        </p>
                                        <h5 class="u-align-left u-text u-text-default u-text-4"> Комании которые
                                            использовали мой опыт:</h5>
                                        <div class="u-expanded-width-xs u-list u-list-1">
                                            <div class="u-repeater u-repeater-1">
                                                <div
                                                    class="u-container-align-left u-container-style u-list-item u-repeater-item">
                                                    <div
                                                        class="u-container-layout u-similar-container u-valign-middle u-container-layout-2">
                                                        <img alt=""
                                                             class="u-expanded-width u-image u-image-contain u-image-default u-image-1"
                                                             data-image-width="300" data-image-height="90"
                                                             {{--                                                             src="../../../About_files/logo-amazon.svg">--}}
                                                             src="{{asset('image/logo-amazon.svg')}}">
                                                    </div>
                                                </div>
                                                <div
                                                    class="u-container-align-left u-container-style u-list-item u-repeater-item">
                                                    <div
                                                        class="u-container-layout u-similar-container u-valign-middle u-container-layout-3">
                                                        <img alt=""
                                                             class="u-expanded-width u-image u-image-contain u-image-default u-image-2"
                                                             data-image-width="300" data-image-height="90"
                                                             {{--                                                             src="../../../About_files/1.svg">--}}
                                                             src="{{asset('image/1.svg')}}">
                                                    </div>
                                                </div>
                                                <div
                                                    class="u-container-align-left u-container-style u-list-item u-repeater-item">
                                                    <div
                                                        class="u-container-layout u-similar-container u-valign-middle u-container-layout-4">
                                                        <img alt=""
                                                             class="u-expanded-width u-image u-image-contain u-image-default u-image-3"
                                                             data-image-width="300" data-image-height="63"
                                                             {{--                                                             src="../../../About_files/evga.svg">--}}
                                                             src="{{asset('image/evga.svg')}}">
                                                    </div>
                                                </div>
                                                <div
                                                    class="u-container-align-left u-container-style u-list-item u-repeater-item">
                                                    <div
                                                        class="u-container-layout u-similar-container u-valign-middle u-container-layout-5">
                                                        <img alt=""
                                                             class="u-expanded-width u-image u-image-contain u-image-default u-image-4"
                                                             data-image-width="300" data-image-height="39"
                                                             {{--                                                             src="../../../About_files/tesla-9.svg">--}}
                                                             src="{{asset('image/tesla-9.svg')}}">
                                                    </div>
                                                </div>
                                                <div class="u-container-style u-list-item u-repeater-item">
                                                    <div
                                                        class="u-container-layout u-similar-container u-valign-middle u-container-layout-6">
                                                        <img alt=""
                                                             class="u-expanded-width u-image u-image-contain u-image-default u-image-5"
                                                             data-image-width="300" data-image-height="54"
                                                             {{--                                                             src="../../../About_files/sony-logo.svg">--}}
                                                             src="{{asset('image/sony-logo.svg')}}">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a href="#contact"
                                           class="u-active-palette-2-base u-border-none u-btn u-btn-round u-button-style u-hover-palette-2-base u-radius-50 u-text-active-white u-text-hover-white u-white u-btn-2">Связаться
                                            со мной</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="u-size-27-lg u-size-27-xl u-size-29-sm u-size-29-xs u-size-60-md">
                            <div class="u-layout-col">
                                <div class="u-size-30">
                                    <div class="u-layout-row">
                                        <div
                                            class="u-container-align-center u-container-style u-image u-layout-cell u-size-30 u-image-6 animated customAnimationOut"
                                            data-image-width="898" data-image-height="898"
                                            data-animation-name="customAnimationIn"
                                            data-animation-duration="1500"
                                            style="will-change: transform, opacity; animation-duration: 1500ms;
                                            background-image: url({{asset('/storage/' . $best[0]->picture)}})">
                                            <div class="u-container-layout u-container-layout-7"></div>
                                        </div>
                                        <div class="u-container-style u-layout-cell u-size-30 u-white u-layout-cell-3">
                                            <div class="u-container-layout u-valign-middle u-container-layout-8">
                                                <img
                                                    class="u-expanded-width u-image u-image-7 animated customAnimationOut"
                                                    src="{{asset('/storage/' . $best[1]->picture)}}"
                                                    data-image-width="1055"
                                                    data-image-height="704"
                                                    data-animation-name="customAnimationIn"
                                                    data-animation-duration="1500"
                                                    data-animation-delay="500"
                                                    style="will-change: transform, opacity; animation-duration: 1500ms;">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="u-size-30">
                                    <div class="u-layout-row">
                                        <div class="u-container-style u-layout-cell u-size-30 u-white u-layout-cell-4">
                                            <div class="u-container-layout u-valign-middle u-container-layout-9">
                                                <img
                                                    class="u-expanded-width u-image u-image-8 animated customAnimationOut"
                                                    {{--                                                    src="../../../About_files/hg5.jpg" data-image-width="1380"--}}
                                                    {{--                                                    src="{{asset('image/hg5.jpg')}}"--}}
                                                    src="{{asset('/storage/' . $best[2]->picture)}}"

                                                    data-image-width="1380"
                                                    data-image-height="920"
                                                    data-animation-name="customAnimationIn"
                                                    data-animation-duration="1500"
                                                    data-animation-delay="500"
                                                    style="will-change: transform, opacity; animation-duration: 1500ms;">
                                            </div>
                                        </div>
                                        <div
                                            class="u-container-align-center u-container-style u-image u-layout-cell u-size-30 u-image-9 animated customAnimationOut"
                                            data-image-width="759" data-image-height="759"
                                            data-animation-name="customAnimationIn"
                                            data-animation-duration="1500"
                                            style="will-change: transform, opacity; animation-duration: 1500ms;
                                            background-image: url({{asset('/storage/' . $best[3]->picture)}});">
                                            <div class="u-container-layout u-container-layout-10"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    all works--}}
    <section class="u-clearfix u-container-align-center u-palette-5-dark-3 u-section-7" id="carousel_916b">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
            <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
                <div class="u-layout">
                    <h1>Все мой работы:</h1>

                    <div class="row">
                        <div class="job_cards d-flex justify-content-between row mb-5 col-12">
                            @foreach($photograph->works as $work)
                                <div class="card col-3 text-center rounded-0 border-0 job_card mt-5 bg-dark">
                                    <img src="{{asset('/storage/'.$work->picture)}}" alt="Round icons design">
                                    <div class="card-body pb-0 border">
                                        <h5 class="card-title upper small-text gray text-light">{{$work->description}}</h5>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{--    form--}}
    <section class="u-clearfix u-expanded-width-xl u-palette-5-dark-3 u-section-8" id="carousel_cfbc">
        <div class="u-clearfix u-sheet u-valign-middle u-sheet-1" id="contact">
            <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
                <div class="u-gutter-0 u-layout">
                    <div class="u-layout-row">
                        <div
                            class="u-align-left u-container-style u-layout-cell u-palette-1-base u-radius-20 u-shape-round u-size-27-lg u-size-27-xl u-size-30-md u-size-30-sm u-size-30-xs u-layout-cell-1 animated customAnimationOut"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="250"
                            style="will-change: transform, opacity; animation-duration: 1500ms;">
                            <div class="u-container-layout u-valign-middle-lg u-valign-middle-xl u-container-layout-1">
                                <h6 class="u-text u-text-1">ПРИСОЕДИНЯЙТЕСЬ К НАШЕЙ РАССЫЛКЕ</h6>
                                <h2 class="u-text u-text-2">Если понравился фотограф вы можете оставить ваш сотовый
                                    номер чтобы мы связались с вами</h2>
                                <p class="u-text u-text-3">{{$photograph->address}}<br>Mon – Fri: 9:00 am –
                                    8:00
                                    pm,<br>Sat
                                    – Sun: 9:00 am – 10 pm
                                </p>

                                <p class="u-text u-text-4">
                                    Почта фотографа:
                                    <a href="mailto:contact@nicepage.com"
                                       class="u-active-none u-border-1 u-border-hover-white u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-light-2 u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-1"
                                       data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                       data-animation-direction=""> {{$photograph->email}}</a>
                                    <br>
                                    Наша почта:
                                    <a href="mailto:info@nicepage.com"
                                       class="u-active-none u-border-1 u-border-hover-white u-border-no-left u-border-no-right u-border-no-top u-border-palette-2-light-2 u-btn u-button-link u-button-style u-hover-none u-none u-text-body-alt-color u-btn-2"
                                       data-animation-name="" data-animation-duration="0" data-animation-delay="0"
                                       data-animation-direction="">VasaPupkin@mail.kz</a>
                                </p>
                                <h2 class="u-text u-text-5">Следите за нами в соц.сетях</h2>
                                <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
                                    <a class="u-social-url" target="_blank"
                                       href="https://facebook.com/facebook.com"><span
                                            class="u-icon u-icon-circle u-social-facebook u-social-icon u-icon-1">
                      <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                        <use xlink:href="#svg-87ce"></use>
                      </svg>
                      <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-87ce" class="u-svg-content">
                        <path
                            d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z">
                        </path>
                      </svg>
                    </span>
                                    </a>
                                    <a class="u-social-url" target="_blank" href="https://twitter.com/twitter.com"><span
                                            class="u-icon u-icon-circle u-social-icon u-social-twitter u-icon-2">
                      <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                        <use xlink:href="#svg-88a8"></use>
                      </svg>
                      <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-88a8" class="u-svg-content">
                        <path
                            d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z">
                        </path>
                      </svg>
                    </span>
                                    </a>
                                    <a class="u-social-url" target="_blank"
                                       href="https://www.instagram.com/instagram.com"><span
                                            class="u-icon u-icon-circle u-social-icon u-social-instagram u-icon-3">
                      <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                        <use xlink:href="#svg-694e"></use>
                      </svg>
                      <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-694e" class="u-svg-content">
                        <path
                            d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z">
                        </path>
                        <path
                            d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z">
                        </path>
                        <path
                            d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z">
                        </path>
                      </svg>
                    </span>
                                    </a>
                                    <a class="u-social-url" target="_blank"
                                       href="https://linkedin.com/in/linkedin.com"><span
                                            class="u-icon u-icon-circle u-social-icon u-social-linkedin u-icon-4">
                      <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                        <use xlink:href="#svg-1f32"></use>
                      </svg>
                      <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-1f32" class="u-svg-content">
                        <path
                            d="M33.8,96.8H14.5v-58h19.3V96.8z M24.1,30.9L24.1,30.9c-6.6,0-10.8-4.5-10.8-10.1c0-5.8,4.3-10.1,10.9-10.1 S34.9,15,35.1,20.8C35.1,26.4,30.8,30.9,24.1,30.9z M103.3,96.8H84.1v-31c0-7.8-2.7-13.1-9.8-13.1c-5.3,0-8.5,3.6-9.9,7.1 c-0.6,1.3-0.6,3-0.6,4.8V97H44.5c0,0,0.3-52.6,0-58h19.3v8.2c2.6-3.9,7.2-9.6,17.4-9.6c12.7,0,22.2,8.4,22.2,26.1V96.8z">
                        </path>
                      </svg>
                    </span>
                                    </a>
                                    <a class="u-social-url" target="_blank"
                                       href="https://pinterest.com/pinterest.com"><span
                                            class="u-icon u-icon-circle u-social-icon u-social-pinterest u-icon-5">
                      <svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style="">
                        <use xlink:href="#svg-9623"></use>
                      </svg>
                      <svg x="0px" y="0px" viewBox="0 0 112 112" id="svg-9623" class="u-svg-content">
                        <path
                            d="M61.9,79.8c-5.5-0.3-7.8-3.1-12-5.8c-2.3,12.4-5.4,24.3-13.8,30.5c-2.6-18.7,3.8-32.8,6.9-47.7 c-5.1-8.7,0.7-26.2,11.5-21.9c13.5,5.4-11.6,32.3,5.1,35.7c17.6,3.5,24.7-30.5,13.8-41.4c-15.7-16.1-45.7-0.5-42,22.3 c0.9,5.6,6.7,7.2,2.3,15c-10.1-2.2-13-10.2-12.7-20.7c0.6-17.3,15.5-29.3,30.5-31.1c19-2.2,36.8,6.9,39.2,24.7 C93.4,59.5,82.3,81.3,61.9,79.8z">
                        </path>
                      </svg>
                    </span>
                                    </a>
                                </div>
                                <p class="u-text u-text-6">©2023 Нельзя копировать наш сайт. Это приследуется по
                                    закону))</p>
                            </div>
                        </div>
                        <div
                            class="u-align-left u-container-align-center u-container-style u-layout-cell u-shape-rectangle u-size-30-md u-size-30-sm u-size-30-xs u-size-33-lg u-size-33-xl u-layout-cell-2 animated customAnimationOut"
                            data-animation-name="customAnimationIn" data-animation-duration="1500"
                            data-animation-delay="250"
                            style="will-change: transform, opacity; animation-duration: 1500ms;">
                            <div class="u-container-layout u-valign-middle-sm u-valign-middle-xs u-container-layout-2">
                                <h2 class="u-align-center u-text u-text-7">Связаться со мной</h2>
                                <div class="u-expanded-width u-form u-form-1">
                                    <form action="{{route('front.form')}}" method="POST">
                                        @csrf
                                        <div class="u-form-group u-form-name my-4">
                                            <input type="text" placeholder="Введите свое имя" name="name"
                                                   class="u-input u-input-rectangle u-radius-20 u-white u-input-1"
                                                   required>
                                        </div>
                                        <div class="u-form-email u-form-group my-4">
                                            <input type="email" placeholder="Введите свой email"
                                                   name="email"
                                                   class="u-input u-input-rectangle u-radius-20 u-white u-input-2"
                                                   required>
                                        </div>
                                        <div class="u-form-group u-form-message my-4">
                                            <textarea placeholder="Введите свое сообщение" rows="4" cols="50"
                                                      name="message"
                                                      class="u-input u-input-rectangle u-radius-20 u-white u-input-3"
                                                      required></textarea>
                                        </div>
                                        <button type="submit"
                                                class="my-4 u-btn u-btn-round u-btn-submit u-button-style u-hover-palette-1-dark-1 u-palette-1-base u-radius-20 u-btn-3">
                                            Оставить данные
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

