@extends('layout')

@section('title', 'Oteller')

@section('content')
    <div class="container">
        <h1 class="text-center mb-5">Oteller</h1>

        <div class="row">
            @foreach($otellers as $otel)
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="data:image/jpeg;base64,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" class="card-img-top" alt="{{ $otel->isim }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $otel->isim }}</h5>
                            <p class="card-text">{{ $otel->aciklama }}</p>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

@section('styles')
    <style>
        .card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
        }

        .card-img-top {
            object-fit: cover;
            height: 200px;
            background-image: url('data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBxISEhUSEhIVFRUXFRcXFxcXFRUVFRUWFxcXFxcXFRcYHSggGBolGxgXITEhJSkrLi4uFx8zODMtNygtLisBCgoKDg0OGxAQGzAlICUvKy0tLS0tLS0tLS0tLS8vLy0rKy0tLS0tLystLS0tLSstLS0tLS0tLS0tLS0tLS0tLf/AABEIAK0BIwMBIgACEQEDEQH/xAAcAAABBQEBAQAAAAAAAAAAAAADAAECBQYEBwj/xABJEAABAwIEAwUEBgUKBAcAAAABAgMRAAQFEiExBkFREyJhcYEykbHBBxQjQqHRFVNykuEzUmJjgpOywtLwJENUohYlNHODs9P/xAAaAQACAwEBAAAAAAAAAAAAAAAAAQIDBQQG/8QANBEAAgECBAMFBgcAAwAAAAAAAAECAxEEEiExE0FRBSJhcZEUgaGx0fAjMjNCUuHxFWLB/9oADAMBAAIRAxEAPwDHgU9Ty08V6Y8+QApRU8tPloAhFKKnFKKAIRSokU0UxEaUVKKUUBchSqUUooHchT08VbcOWKXHCVahIBjkTPOqqtRU4OT5FlKm6k1Fcydng8NF1wbxlHgSNTQDYpPUetavFB9ifT4iqECvOTxtZyck7HoIYSkoqLVzSYJgbSLULy5lOHvFQB017o6DSuTEcPYaHaZEpO0+JBA06zVngVypbCkGIbUhKfVGcz6mubHnkobObmQkc+8rQRUZVqktb7jjThHRLYpcOxp9hOVt1SBmmBEExHOrprje4iHA26notAPwrHYmsJRJIAzDcwOfOq5y8CmlqbVlKdNwqdtR765mpXukWNR5noRxmwdH21kEnq0cvz+VRGD4Y8JbuVtHo4En4QawOHXp9ntEzMQreTymi/pJYcLZb23gyTIB2q+GJrQ0Un79SmVCnLdGxf4CcIll1l0coWEq9yvzqjv+F7tr22HAOoTmHvTIrkOJBvXMpHvE+6r/AAnjC5agoeCx/NVqPiDXVDtOst0n8CiWBg9jM4nhrrGTtUFGdJUjNoVAaEgHWuA1b8aJOIvB5whCgkJhIkac5JkVnLfA30OCHJRJkFR25DWu2j2gpWzqxy1MC1rE6jUaK4ggwajFaSd1dGe9HZg4piKJFMRQIEaYiixUYosAKKiRRYqMUhg6aKJFRIpDB0qnFKkBbxSy0TLT5auKwcU8VOKWWgCEUoqcU8UADilFTy0opiBxSiiRTRQAMilFTilFAA60nDNsUoccOykGPITrWeitTgbf2Su9P2Xs8k+1rHjWb2lNxo2XNmh2dFOrd8kd98j/AIceSPlVCpB61pcRTDA/s1RKA615tvU9AkXfB6fsXv8A3x/9SaPjbZ7OQASNdeQ2MeME1PhZQUy4R+uA9zLYpuIUuZAG8up7xVyQASY8TEetWPYqW5jLtAy6pzCQIImqq+wy2ykrQUdSmR+A/Ku/HbZxbQDQBVmB1OXQTOtUzjlyhlaHGXFTzB7SIjbnTjGT1jL3Ck1ezQO2wsKlSHykzMEAjTY11WjTzL/aHsniqAARpoBMj0FcTGK9mrKoCJHtIO2k6++meumu2WtGqZTsY+7185qco1Gsr1RCMoJ3R0Yk48RlUyqO0CpBCgBEEDmBNc9piSDKHQAMpg5VJMjQeBrvurolkLQtQleUpVB0jWiWb5UnKMiyE+yRrA86V1bvRHu7plRhl2lIHeUJG4M7aa661f2z4LimiSVJCVTpBCpj10qptW2njKrcRGgT93rEAb1bYdh7aFFaAoEgAgmYA1GnKk3C/iNKRzXie+f98qARXXfDvn0+Fc8V6mh+nHyR52t+pLzYOKaKJlpoq0qBkVGKLlpiKQwUVGKMU1HLRYAJFNFFIpimkAGKVEIpUrDLnLSy0SKUVMiDy0+WiRSIoCwPLTRRIpRTAHFLLRIpooAgE0G4fShwNLzJWoJUAUkSFDMkg9CNRXYhNdX0sWXZPWKogi0YSfNsn865cTiHSy25s6cNQVW9yty0xFGUmokV1XOawKK1GDohhw5QJanNJlRyq38tIFZoitVg4AYdOYqPZjSISnumAnr4nxrK7Vf4a8zS7MXffkW2KJhkeaaolJmtBi4+zH7Q38jVG4DFebk9TeitC94Saysuj+vH4stn51PHkJ7M5o0Ij9qRHrU+EwSwsn9er8G0D5U3ElqlSUlSSrKrMPBUEBR8BNXSehStzEYw+ltCVEH2wNInY9a5bi6zMrcaUQUwIUBvI8fGu/F7Ft1AQ6DGYEQSDOsbVS3XD7aEEC4cbTzzEFPrIqC4T3dpDlnvpsPhzwIylTck7K0MmuW7ZQt0tqYSIIzRHe0kbRtNDawl1RztvI30CgfuxrIPhUL6yuc6isIUpZGXKqJgQd9uVdCir6SKru2qC3mFW6Egw43roJUQVbgazQ7TDSO+i4yqIMhSQQJ1imfcuOyDa2F6OBWb2gBEbg6DnSssVCSUuhWTKoao57AgxtvUkqiTs7kbw0urAWcNeCgG1NrKRJMkAgmREVcYe28bhxx1GUKQgCFAiUk/nVNhV02lAJywdBrG28VoLS6BuFtIIU2G0qB3OYkg6+gpScua95KKj1A3476vT4Vz5a7b9PfPp8K5steoofpR8kedr/qy82CimijZabLVpWCy1EijZaYikAEpqJTRstNlpDAlNRIoxFMRSABFKiZaVAFxFKKnFPFFx2IRSipxSii4WIRTRRIpop3FYhFNFEigXV0hspCzGbak5KKuxqLewVverr6ciA9ap59j/mAHwqjtj2mXs+9mOVMcydAPfT/S1cO/Xmu1gqbt2NAZSSJUo8pBVm91ZnaEr5LGlgIvUSxUIqaDIBPMA+8TT5a1E7ozWrMFFa3C0KNuvMnKMgCTMkiNTHKssU1q8LKTbuZDrCArfQgJ09xrK7Wf4cfM0uzF335FtjCe4P2vkao1iBV9jaRkH7XyNZy4E7V5t6s3VsanhZI7FZGxeUR6IbB/EGocSP5EAZVKzqy6CcuhJUroABTcJgptoO/bOfBJ+dTx5ZybxHlqDpFXy2KI7mB4nuVttpUjNPaCcoJMZVdKp3uI2127iHVHOSIzJiACnw861F5cJQEkrCQVRJBPI9K5cSehpTqQh1IIB9SB86jGcUkpRv4jlF5rp+4z1ji6EKyHIRmAM7gEiTv40rl9tNwtSSVIBTEK2lI2PvqzsMMadRKmG1HeTlkz864HMMt1OloMKTB74BOpjuka+NWKVFy28yGWaW504jcywHG1KTKwggkKkRJqWHO5k5UKBKUE5VIMQN9a5L/A2GkglbyNZSCSQVDUA6HpQ7bCcozoulJJSZlIgTqRy0ppUmtGK809hrF5LpKnENagd0wB6TVnh7bKXlIS2EOBAKo5pJ08N6pWcKckJbfbVl1zRoqTpETtVvhlm/8AWFvPFBzNpSCgnkSdR61JrpL3Am77E75PfPp8K58tdt6nvn0+FAy16jDv8KPkjz1dfiy82By02WjFNNlq65VYCU1Epo5TUYpXCwEpqJTRiKiaVx2AkVEiimomlclYHlpqnSpXCxb0opU9QzE8o1PFPFPTzCykYpRU4oGIXHZNqXuQNB1NKU0ldgoNuxVcR3K0BOQwNST+EVnbq5W4kFRJjSTE9a773Fw6khaYIIKY/EHwqnInefDpWJia+eTs9GaNGnljZ7lvwrifYXDKlgqbS6klHJWsbHzrq4jx5dzd/WX20uAhBLZ07kSGwobATWesP5ZuZjOj/EK6sVSQsjolI9yRXM5XSuddJWvY1lribbkFMCQSEgezHLwHSkcUZCshWArz0HgTsDWJYcKQYURykePKmyzuPWtBdoTSWhxPCRb3PQyNK2FgIt1TEQiIEbhO/Uzzrzzhq4ztZSZKdPLTbetxhaW027qkFapWkqzmdRk0R0TGkVHtGXEpQkupPAxyVJRZY8UXOVtMc1/I1ljejWo4xxIq4hPZhKQZEkk7RrsKpr19YAhUanYAdPCspU7K7NPidD1K3cQ0w3l+/wB8yZ7xSmYqg4mxCQiFhCcxK5jvgAwkE7ax7qxj2J3JZRLqiApSRMEBOVOg08a40Yo6EhEpKRsCkH8d6svFohexaYsC+gJbcQkhUydQRBEaedcptbzsi0FNKSTO6gZkHp4Cq83BJKihM+Ej50Vm6A17P3LPwihSaVuQnlbuW9o9ctoyhhCtiO+AdDzB56Cqu8XcqdW4bdYUojRJnQCCQR5D31Ju9j9Z7/4iutrER/PWPME/AmlF5eQNJ8zlv8TcWyltbDwIcCsykqIjLG/Kp4bjyU5ku9plyEQUGJ0g7edWCL3Q/agnkClQH+Gpi/PNSPf/AAoc484hlfKRnMPxBttIlSdSNFCdJg1bYZcoN452SgpHZIgA6TmVOnuoxv2l7dkSepTQLjEW2VyloTGqkJHuJFPuvZagk1zLTGGy0UqdBRnCSmR7QVoCPA1zlNRW6XpWtUwlOUEkxGyR0j51Mk9D+Fa1DHZYqMl6GdWwWaWaLIlNCWtI3UB5kCgP4Slw6qek9FmPdtWPxVkNOrbEnKY1gnYHcedWPtBckV+wtbs2geQfvp1Me0N+m+9EKK8+Du+ldxtHkjvEgRPtGP5MOARPNKhSXaHWIex9Ga9UcyB6gVzJfBWUyNBvy99Y51tQ36kcjsYNCVSeOfQawnia9V6jOUFadAD7Q3JMj4Uzt60ndxHvB+FYxe1JKvWq/bpdCXsq6ms/SbP6we4/lT1nmrBxQCkoJB2Mj86VP22XQXs0Te2ghAFGmsndX7zSoSvToQDHvoZ4gfjdPnlpU8XHIrjlQbZsZrnfv2kiS4kes7eArE3N864ZUs+mgHoKAzoY61GeNdu6iUcMr6npFssLSFAyCND1qOI2CnUZRzIny8Kzt2QhTLaCQsakhSsu8JTEx1r27hDh9C2Q86Ac6SAkjRMEjMD6VCGNVWldrccsNlnozwR3CHCcmUkydOdQXhLvZFyDlSSBpBgHUx0mvROPUItlKQ2sKVGqhoUnmNNtaytrjLYtS2vcSnzKiYM+EmsvFVHBLh63av5F0E29TOYewoLzRqCk+mYSa6MaRNw6OQWU+UaUNtwK3UARGpnXb3ExV7iuFRcXaiO63cZSf21Kjfyq1bl0FZMzrdmTECu+4wJxLQdOiCspH87YGY6cvOvVE8LWDds092yFLSO0WM0B1AjM0P5qpITO88ui4nx6xNn2JbAIk24CgcgJ0JIOoOvXeoValrK5FI8z4bX2TpaUD35y6DSNiY6+6vRcJ/8ATOCN3AD5SisRY4R9bkITIChOWc2ZSZ1UOQ6eNbfBsGNvbrayFP2iFZs2YGcp5kkmE1OWMvRVKW9wjRSqZyVhwe2nKtwlxstpVKVpSQo7jLuRSxHhhhboQi4ZbSc2hUVFJRAIVPM6mtTw9hzSAXHSAmIkmAVJKgRPUATFZzFrVCblx9haXENZXFn2gCZOU67d061wurOMM09vkWc9CkxLhl1FsleXudosg9QQkD/Ca5LHhEvoQpt1sFQUSHD2YGUxAJPePkK22IcZF+ydcQ0CgKKXDKcrWiYOpkyTXnN7iSXWmWEEFedSQkZRmKiMonmqVEe6pTcrxybX19GTjs7mkZ4LtyhJLjgJSmYKCJIG2m00/wD4CbOz6/VKT+VaZK7NLDYcdZQ42EpUFLbDiCMspIVqNRXe5cWwQglxCCeRcAPuJmDuDzFeaq4zHwbazW8lsdSVJ7oyKeA0qQkIc70klWUkqmIAAOgEHrvQ18BrGX7QAxrmSRr4eFa6y4iaZBUMi06BMHvHlKZGoneJ2q8/SlspGdakgKykkwAJEiCeXl1rvwc8TUpZnVtLXSUdPX7sUVEoy20MDY8Crmc7ZA/a8h92tDa8HISPtG21gb69N+VW7bwhAbUkgkqUZEpTHdmNd65LniIJUGgEkqCgRmJUnvBAlIHU7mmsZF2jVve3IeV/tOhjDs7YCWmuz17nZoCdNAIjYRPxrH4zwS424AwjMhYJSlSwFJWkSpsE7ggFSekHWIra4biSlJOZacwzSCUjeAiRy198ULGsSWm0W6CguoRnSCBHaDUADfUSNOprQw1aPKUm7c9tLFM14I85uuDrhB71qr2oBCmjM6g+36HxquucFdQNWLlP/wAa/wDLzFerW2LrcYZeUkSooKklOqZCc2nJQVmFSxPiFltJU4lxKQUjNlkSrbY+lSn2moO19eSadxKldXPDnkOhQShb0690hwKEROhA01/GuZ/D1GVLRJO5UgEnzJFenIuEJvHgpsD7Vxzttc4bSW0uITyIIKvWtPibjHYLKAe5mlUeE9489DpVkcW5bW2vuNwPC8NwI3DiWmmUKWqYEBMwCTroBoDV6v6Pr7WbM7GYKeYCeSugFduBcWNW7hcas24UEQlSyooWkEKUhagSJk6VfWn0ltEqJt4KQYCHlEFcEALGnd1OusdK0otWuUO9zHXH0f3iomzXqVEQRpJ1k5oG3Osfe2KAkkAgiI18elexD6TUZio2y5MafWVZRAI0TEDf/cVW4RheGXq3XXFfVkZ05Wc4jJkA0JE+2Jn0inJpISPG+zEGemnn12/3Nc6tK13GeFtW7ym2nUOgahSNvLzGxrKrHhUUhsurDEWW20oKVkgawuBqZ0FKqMGlRqRPWWOA1XiFOIIltWWcoTKBKte93nNfKANaqLrgRabT62Voyye7mGbcid9vx8KNh7D7pJaUUp2PeUBz6b6GuhjhXNo/ddmnXRKCozBjmBvWbTrpJJvW3QucJPVIx+GYWXnEoRqSQAI1JPhWuxv6N37dlLyhIjMqN29Rorx15U7WAsW6gtq9IUCSDkCdR7J9rQ1aXmLXTzam1XoUDMp072UZtO8fd4CuiVWL2YKD6Hn6AO3hwnllIOoIJjffprW+wBN5crcbt3SggEpB1BURJIV9waD1I86phgKVqzm6S0BGjiXIPkUp867sPw5IWcl6oJCsyi0wtUxsdSNNq46tXvrK/D76E+FKz0Oa44Xvne07ZtQVqAYKu8NCDlmST6VUOcIXYby9gvPnB2MZcpG0da9JXxm1bJS0hLigBOZScpUTJUogq5mT60n+OXVtlVuy7nKAEKUEFBUCZkZpy6nXwqMa05TaV/T+yfCSWq+/Q8oVwpe5jDKpEEiDokzHLwPuq0x9b6bi7ZBPfebJSIVKlJkbbnUbVfDjXEVLMdlmWEp0AB7uaAO/vqak3gdqhwXDuIntipLiiWFEFY1M94Tr5VZKu4av3WRONLlZmZtMEv3G0FDSssq3000Gx8UmrNHDT5t1oWy52hUhSSEFaElM5sxA0kqOk61u7fHG+zyDEGyiTp9Vc6zuHetD/TTKAUfpEBKjmKRaqIn1UTGg0rnnXrSSsvHnv9BcKK5P+jKXltiTbRW2y1lCld5ttLbagn7xClAgiFHXUDSutjCsTcbQ4lTSBCSrMUK7ygSICSY2rrvxauJyKxN4IOY5EsKy9/VWknedvGh4dbWjQyt4k+kaadgoAxtvTdas1+XXyY8q8TY8N2dww0FuuIUrZWQHUmDomNK6cVN0SCw8o5gJCkoGTfnGvl4VkEqttf8AzG61OsMvAT6GmWizEk3tyZ3PYuk6aa61x1Kdepd6rRevNicfAt7nDLwqKPrkExM9mEczvB+FVbmAXpJBumhBPfJQBOkDRG9c7dvYGf8AiXzG/wDw8kdNxRXBYKn7e5TMSAzAVG0g0o0Ky2v6f0K3h8QBwS8MzdsT/S7MydTp9nrtVJh4uLvtgH25aISrtENBR1I7hyTAjwq87HDpH211od+yR5VBqwwtM5V3QmJIbaEkGdZq+FKsou618ixZLO6d+WpxP4A4W0By4aUEiITJUgSTpGXQSOuorQYzhDLjTKGLhSHAlIWShbjUJbCSUj7skJ1HXXegC3wzrcn0aHzojibICWl3QWAcsKbRO2hKTpsKlCNeL1RW1fkZh+xvkZgLhJCfZhB1/Z7mmw38KssHdaUhKLq6vWnTopSf5PKeRUGzlgiSJ2I13i/b4jhABaEgAAqeClK8VKy71T4txUkKSlSUJCiAo6qjnpOXfUV103NftBwjzZoRgLSWvscSuOUKLxWYTMgDJzkD+yK57jCXXg3mft1hpYWgrZXmSpOypBBzDrWfdurJYnKiOvdHzricVaDYoH9pP510xcivKkWHEvD9q2lTgdSFxIS2VJnWToskTI3rJucRPODI2XSQnMkOJQVE7d5UAQNt58Ku2r63Tt2Z81JPxNHb4itE7tsH1SPhTav+ZX9A05aHDg/El4QWLhsKbV2iisqSFglJURmCpkxHqKFeY7iK1OIaU6sOK7M5ktkqb0CAozvy2FX7fEuHH2mmR/b+U1x2/EVgVLBS2IUIVmUgHpkIV0A1qFop/l+QmrqzZpl8EMNso+sIKlgHtXELS02FEbkAAhMwI1OvOsu7gDqn1KQwylKgQlPaJU0DtJ0SpJI1BMwd6heYtbLbU2LglJM5Xbm4dQdZ7wKzm/OK43MXZyZBdJJOiu8/lKYiBGo08asU1FWSBU4pWuU+OXKrZZY+qkFCgoqdhazKQcpLRyFHMQTvuaCziYLuZ1thCXCkpQQsDKVAHIQYb0BMq21rQox22SQkKYLaUgAFDxVpt3o2oK+IbUiCLfNO4afgDxE61ZxfAjkXUr+ILZltlt5tdqsqOrSUlS0hUqGdec5oiJATvXNw5b/WCWUC3SuFKTmBJMalI5HQzrySat3OIbInRLMZduxenN1kq28K47jGrUxGVJ+8UNOJkeBzymmq3gPKrcjQscEPlIMWWw2CFD0OcTSrONcVZAEouFpSNhD2g6fylKpcd/divh+JUP8AEb6xCiiJmhMYy4ghQKARtWxdvsMT7OHW3rmV86dviG2QPs7K0SeoaBj31RHA1JRvGm/kXe2T6syVxxM6sZVOtx0pmMWdSQpKkz1g1t2ONSn2W2R5NI/KrFr6QnP6seSQKT7PrJfpfIXtlXq/U8/Xity4IMqHQIWfgK6bMXoMttuyRGjS9vdXpdpx8g+0JPmYq+teNbciYTVSwdZK8qdvvwIe2VObfqeL3WH4i57TNwrSB9iv/TRGsMxUJAS1cgDkGlCPeK9RxLjtseyhNZy74zCgR2aZ6/wqmXGT7sb/AAK3i5v/AExn6BxMmeweB/ZSn8qMjh/FZ/kndOqUT+Jq9Z4oMxA9wrQNccqSpWg3mm+PH9qHxpvUxqOHMX37JwerQ/zVNWA4z+re/fYHxXXorP0hJIEge6j3HH7QTolM03xF/j+ouOzy5eBYv+pe/vbb/XUU4Di+/ZO/3tt/+lbG748JOkJHhuauMM4hX2BWsSrNoNCSNIiKU44yEFOUUk/O/wAxqpJnnzfDeMHUMP8Ao8x8nKZ7hzFzoWLjX+uY1/769PtuNgNFoUnzHv3AoyOMmSdZI9N6i5VLJ/8Aj+oOszyE8MYmJi1e13+2a19y6518O4n/ANI9/eo/117dd8W24RMJMzpNUL/Ftud0kGDqkga8qqqVK0XaCT9fqLiyPK/0FiX/AEzv74PwVU/0HiX/AE73vWfhXqC+K7Uxov8AdSfnR2+J7QxIV6pT+dcjxuKv+j8yarPnH4nlJwDEObKx5peP+WuZ/BrtO6SPHK8P8te72mPWaht8q6145axJP4muqnUqNXdl6/QksTT5x+L+h85Ks3ZhS0jzz/MUFVkebzfu6edfQq8XtFadsU+Er99QTbsObPNr8ClKlT5qmfdVcsbUjvH795NYil/D4nzx9VP61P7v8aKLD+u9yBXv7vDVsod5DB595psbnmclVN/wzYSEoTaqXMFOdLUA88wVuOkSfCr6eKc+T91mS49L+HxZ4kuwMkZ1EfspojVgmO84seQSPlXsFzwFaq9jsp30fXp6BVcLv0ap5A+aX9B55kmr1iKXNte5C49NfsXxPK12InRbkeJSPlRG7NqO8Vk/tivU2PowSYIUvkdcq/kmo3X0fKQNkj+kpCoHnlUYq5TpSWkn9+4PaIfxXoeVLs0SYzR4rNT+qMR7J2/nq/Ot5c8DupOi7dfgFwfnXGeHHhs2g/sEK+ddMaUGt2S465RXoY1u0aB1RPhKvzoi7RtXss/go1pnMOdT/wApz+yhJ+ZqAdWgewseaY/y0SpQXN+o1XfReiM8GG0iCynzIoaG2x/y0eqRXffXMnUH/fpXBn6CmqMPtsfGl4eiHKEH/lo/dFKpAnpTU+BD7Ycaf2kcH1k031k1xZqWavaJRM+53C4NTTdGq8KpZqegXLVN6RXQnESOdUgXUg5UXGLGXBxA9aEbonnVb2hpw5XNUwdKbvzFYvsHcQXm+2JDedOcpIBCZ1IJ2q64msW7a4LaHS63CSFJicqhIE7THTTWsjaua16V9LluhLzC0py5rZvQaezIH4QPQVm4zDQpuKjzuWRMOq+IJAJgGPGmcxAnnVUtyhlytRYelZd1ehAszdHrW6w+8+yECO+nkBOqddDrXmPaVtrN89mJEd5POZHd1HSsrtimnGJOBpcUuMwTrtPyquDtAu39tevyrlU5POvPRp2Viw0y1NuoQrKEyDppyUR8qqr5qCIjL+M8o6ii2Dw7FvyI/wC9Vct++ZEDSN52PSOdTytaCscF5cFBASjNPUn5CpG8WlKSUJAV/SVPwrkv8ULagAkmQfvRzoD98tQBU3odiVTHjEVaqTcV3RM0LF05ySn95X5UJWNuHQIB9VVRWuKOq7oQnbmpVDTiLifZQnXcDNA8oprDO+qXqRsXd3iTiSApCdRIAUr8qH+kF5c5bTAIHtEGf3aqbm6ckFSUzAIjNPkdaZd26USpKImIIV796fAVtkMuU4s4vu5SR4rMH3imw91LsEqLYzQZJKRBgkxy8qp7Z9wnKEpA5E5vzolpdS1mgDRWg251NUUnZLoNHXcYmhCiArMAT3kkwYO+tSax5I5qH+/OskXaYO1v/wDFUGtbkGz0fDuNFN+y455axXe/9JD5+8fePyry1L/jUzc+NU/8LSv3WRPUbD6QERldYac6FaQCNye8N58asmuLrFQ79mPNDhTrA2iNK8c+sU/1muhdn2X+okpHs4x7DYBDTmbopSQNt5k8+Vd7eO4eUapUI8QevX0rwxN3puaIL5UaKrhxXZspbL4iep6TjWJWpPcSNhoUJ2Ovwqmz2azCm48UkD8CKxCrpR507N8pJB38ORrPfZ9SHJhd9T0NGA4coT2ixPKUfnSrC/pj+jSqr2ar1C8upnZpTUZp5r1eciSmlNRmlNPOBOaU1EGlNPOBOacKoc08084zqYXrW2+kPGg/9UOYEixYK4IgLUCpQ056ifOsAFU+eqa1NVWm+Q07Eyumz0OaU1dmEEzVrrRw9nqI1TzmdvdWNmtRarPZ6iPZ5zO3urN7R70Y+ZOBaXL21c5dqFwvagZ6xeGWl5Zv/ZIHgf8AEa57251jWYnbQ9daFaufZo8j/iNBunKk4akQFxfpQRm3jTSdKA/fhcaK8NIFM+2lRlQmB1ihXCkwACBHKanGEdNHcQVrFJEBKz6gfOgfpDJsg68s0RSbuW0jQgeQoaLpCeZ8NKsUI/xFcM9dqmSgAwD7RM+G1JV0spkoTExqTQHboTmhWkbwPdSXdZgDkVE6SaeT/qB0suOHQBMATJmiJuCpgq0EoJ0251xM3KoMImBzVG1FeelknaU7edOEO+tOaHcp81KahNNNekzlQTNSzUOaU0ZwC56fPQZpTTzgFz0u1oU000s4Be0pw5QZpTScwDdpT1zzSqOZAQmlTUq48wEqU01KpXAeaVNSppgSpTTGlTuA9KmpGncB5pTTUqLgSmtBZPAt6H+aD4ERWdq3wYdxXn8q5sVG8LkovUtX10HtKZ87UMVmZSwsGHO4jy+ZoNwRIPOI9KgwruJ8vmaC8o5onSPgf41JxEAumAtQM7DpNQcaAiB5mKd9apgGPSguAxqomRUkn1EdLbISNBrHM1BDY+8Bp40FtjQkknSuhgAoywPPn5USTXMEDdcTMlQjymKTjySAJPhCYFJTYKiI0/hTuo0EbCjQQyLsRsowNaleOS2eUgaeopBGnKPKg3x7nuqdJLOrdR8iupTTUq17lY80pqNPSuAppTSNNRmAeaU01KlmAeaaaalUczAeaVRp6MwH/9k=');
            background-repeat: no-repeat;
        }

        .card-body {
            padding: 15px;
        }

        .card-title {
            font-size: 1.25rem;
            font-weight: bold;
        }

        .card-text {
            color: #555;
        }

        .btn-primary {
            background-color: #007bff;
            border-color: #007bff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>
@endsection
